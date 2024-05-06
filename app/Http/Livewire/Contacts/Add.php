<?php

namespace App\Http\Livewire\Contacts;

use App\Models\CategoryOrder;
use App\Models\Club;
use App\Models\Order;
use App\Models\User;
use App\Notifications\NewOrder;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $title, $body, $image, $user_id, $cat_id, $club_id, $status;

    public function indexOrders(){
        $this->emit('indexOrders');
    }


    protected $rules =
        [
            'title' => ['required'],
            'body' => ['required'],
            'cat_id' => ['required', 'integer'],
            'club_id' => ['required', 'integer'],
        ];

    protected $messages = [
        'title.required' => 'الرجاء إدخال عنوان الطلب.',
        'body.required' => 'الرجاء إدخال محتوى الطلب.',
        'cat_id.required' => 'الرجاء إدخال نوع الطلب.',
        'club_id.required' => 'الرجاء إدخال جهة الطلب.',
    ];

    public function store()
    {
        $this->validate();

        if(!is_null($this->image))
        {
            $image = $this->uploadImages('files', 'orders', $this->image);
            $order = Order::create(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'image' => $image,
                    'user_id' => Auth::user()->id,
                    'cat_id' => $this->cat_id,
                    'club_id' => $this->club_id,
                ]
            );
            $manager = $order->club->clubManager;
            $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
            if($this->club_id == 1){
                Notification::send($admins, new NewOrder($order, Auth::user()));
            }else{
                Notification::send($admins, new NewOrder($order, Auth::user()));
                Notification::send($manager, new NewOrder($order, Auth::user()));
            }

            $this->emit('notification');
            $this->emit('IconNotifications');
        }else
        {
            $order = Order::create(
                [
                    'title' => $this->title,
                    'body' => $this->body,
                    'user_id' => Auth::user()->id,
                    'cat_id' => $this->cat_id,
                    'club_id' => $this->club_id
                ]
            );
            $manager = $order->club->clubManager;
            $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
            if($this->club_id == 1){
                Notification::send($admins, new NewOrder($order, Auth::user()));
            }else{
                Notification::send($admins, new NewOrder($order, Auth::user()));
                Notification::send($manager, new NewOrder($order, Auth::user()));
            }

            $this->emit('notification');
            $this->emit('IconNotifications');
        }

        $this->reset();

        session()->flash('message', 'تمت إرسال الطلب بنجاح!');
        $this->emit('indexOrders');
    }

    public function render()
    {
        return view('livewire.contacts.add',
        [
            'clubs' => Club::whereHas('clubManager')->orWhere('id', '1')->get(),
            'Categories' => CategoryOrder::all(),
        ]);
    }
}
