<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Order;
use App\Models\Reply;
use App\Models\User;
use App\Notifications\NewReplyOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class Show extends Component
{

    public $orders;
    public $body;
    public $idOrders;

    protected $listeners = ['showOrder'];

    public function showOrder($id){
        $this->idOrders = $id;
        $order = Order::with('user', 'category', 'replies', 'club')->where('id', $id)->first();

        $this->orders = $order;
    }

    public function status($value){
        Order::findOrFail($this->orders->id)->update(['status' => $value]);
        session()->flash('message', 'تم تحديث حالة الطلب بنجاح!');
        $this->emit('indexOrders');
    }

    public function indexOrders(){
        $this->emit('indexOrders');
    }

    protected $rules =
        [
            'body' => ['required'],
        ];

    protected $messages = [
        'body.required' => 'الرجاء إدخال محتوى الرد.',
    ];

    public function storeReply()
    {
        $this->validate();

        $reoly = Reply::create(
            [
                'body' => $this->body,
                'order_id' => $this->orders->id,
                'user_id' => Auth::user()->id,
            ]
        );
        $user = $reoly->Order->user;
        $admins = User::where('role', 'منسق')->orWhere('role', 'مدير الموقع')->orWhere('role', 'رئيس')->get();
        Notification::send($user, new NewReplyOrder($reoly->Order, Auth::user()));
        Notification::send($admins, new NewReplyOrder($reoly->Order, Auth::user()));

        $this->emit('notification');
        $this->emit('IconNotifications');
        session()->flash('message', 'تمت إضافة الرد بنجاح!');
        $this->showOrder($this->orders->id);
        $this->body = '';
    }

    public function deleteReply($id){
        Reply::find($id)->delete();
        session()->flash('message', 'تمت حذف الرد بنجاح!');
        $this->showOrder($this->orders->id);
    }

    public function render()
    {
        return view('livewire.contacts.show');
    }
}
