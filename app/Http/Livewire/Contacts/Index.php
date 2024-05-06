<?php

namespace App\Http\Livewire\Contacts;

use App\Models\CategoryOrder;
use App\Models\Club;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public
        $titleSearch,
        $isTitleNull = true,
        $clubSearch,
        $isClubNull = true,
        $categorySearch,
        $isCategoryNull = true,
        $statusSearch,
        $isStatusNull = true,
        $statusValue
    ;


//    public function mount(Order $order){
//        $this->orders = $order;
//    }

    public $listeners = ['indexOrders'];

    public $indexOrders = true,
        $ShowOrder = false,
        $addOrder = false,
        $editOrder = false,
        $filterNull = false;


    public function indexOrders(){
        $this->indexOrders = true;
        $this->addOrder = false;
        $this->ShowOrder = false;
    }

    public function addOrder(){
        $this->indexOrders = false;
        $this->addOrder = true;
    }

    public function orderSearch(){
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            if($this->titleSearch != null){

                $this->isTitleNull = false;

                $this->isStatusNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('title', $this->titleSearch)->orderBy('status')->paginate(10);
            }elseif ($this->categorySearch != null){

                $this->isCategoryNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isClubNull = true;

                return Order::where('cat_id', $this->categorySearch)->orderBy('status')->paginate(10);
            }elseif ($this->clubSearch != null){

                $this->isClubNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isCategoryNull = true;

                return Order::where('club_id', $this->clubSearch)->orderBy('status')->paginate(10);
            }elseif ($this->statusSearch != null){

                $this->isStatusNull = false;

                $this->isTitleNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('status', $this->statusSearch)->orderBy('status')->paginate(10);
            }else{
                $this->isStatusNull = false;
                $this->isTitleNull = false;
                $this->isClubNull = false;
                $this->isCategoryNull = false;
                return Order::with('user', 'category', 'club')->orderBy('status')->paginate(10);
            }
        }elseif (Auth::user()->role === 'مدير')
        {
            if($this->titleSearch != null){

                $this->isTitleNull = false;

                $this->isStatusNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('title', $this->titleSearch)
                    ->where('club_id', Auth::user()->ClubStatus->id)
                    ->orderBy('status')->paginate(10);
            }elseif ($this->categorySearch != null){

                $this->isCategoryNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isClubNull = true;

                return Order::where('cat_id', $this->categorySearch)
                    ->where('club_id', Auth::user()->ClubStatus->id)
                    ->orderBy('status')->paginate(10);
            }elseif ($this->clubSearch != null){

                $this->isClubNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isCategoryNull = true;

                return Order::where('club_id', $this->clubSearch)
                    ->where('club_id', Auth::user()->ClubStatus->id)
                    ->orderBy('status')->paginate(10);
            }elseif ($this->statusSearch != null){

                $this->isStatusNull = false;

                $this->isTitleNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('status', $this->statusSearch)
                    ->where('club_id', Auth::user()->ClubStatus->id)
                    ->orderBy('status')->paginate(10);
            }else{
                $this->isStatusNull = false;
                $this->isTitleNull = false;
                $this->isClubNull = false;
                $this->isCategoryNull = false;
                return Order::with('user', 'category', 'club')
                    ->where('club_id', Auth::user()->ClubStatus->id)
                    ->orderBy('status')->paginate(10);
            }
        }else{
            if($this->titleSearch != null){

                $this->isTitleNull = false;

                $this->isStatusNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('title', $this->titleSearch)
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('status')->paginate(10);
            }elseif ($this->categorySearch != null){

                $this->isCategoryNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isClubNull = true;

                return Order::where('cat_id', $this->categorySearch)
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('status')->paginate(10);
            }elseif ($this->clubSearch != null){

                $this->isClubNull = false;

                $this->isStatusNull = true;
                $this->isTitleNull = true;
                $this->isCategoryNull = true;

                return Order::where('club_id', $this->clubSearch)->orderBy('status')
                    ->where('user_id', Auth::user()->id)
                    ->paginate(10);
            }elseif ($this->statusSearch != null){

                $this->isStatusNull = false;

                $this->isTitleNull = true;
                $this->isClubNull = true;
                $this->isCategoryNull = true;

                return Order::where('status', $this->statusSearch)
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('status')->paginate(10);
            }else{
                $this->isStatusNull = false;
                $this->isTitleNull = false;
                $this->isClubNull = false;
                $this->isCategoryNull = false;
                return Order::with('user', 'category', 'club')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('status')->paginate(10);
            }
        }

    }

    public function show($id){
        $this->indexOrders = false;
        $this->ShowOrder = true;

        $this->emit('showOrder', $id);
    }

    public function areYouDelete($id){
        $order = Order::find($id);

        if($order->image){
            File::delete(public_path('uploads/files/'.$order->image));
            $order->delete();
            session()->flash('message', 'تم حذف الطلب بنجاح!');
        }else{
            $order->delete();
            session()->flash('message', 'تم حذف الطلب بنجاح!');
        }
    }

    public function render()
    {
        if($this->orderSearch()->count() < 1){
            $this->filterNull = true;
        }else{
            $this->filterNull = false;
        }
        if(Auth::user()->role === 'مدير الموقع' || Auth::user()->role === 'رئيس' || Auth::user()->role === 'منسق')
        {
            return view('livewire.contacts.index',
                [
                    'orders' => $this->orderSearch(),
                    'clubs' => Club::all(),
                    'categories' => CategoryOrder::all(),
                    'Completed' => Order::where('status', 'مكتملة')->count(),
                    'pending' => Order::where('status', 'تحت التنفيذ')->count(),
                    'allOrders' => Order::count(),
                ])->extends('layouts.side')
                ->section('content');
        }elseif (Auth::user()->role === 'مدير')
        {
            return view('livewire.contacts.index',
                [
                    'orders'      => $this->orderSearch(),
                    'clubs'       => Club::all(),
                    'categories'  => CategoryOrder::all(),
                    'Completed'   => Order::where('club_id', Auth::user()->ClubStatus->id)->where('status', 'مكتملة')->count(),
                    'pending'     => Order::where('club_id', Auth::user()->ClubStatus->id)->where('status', 'تحت التنفيذ')->count(),
                    'allOrders'   => Order::where('club_id', Auth::user()->ClubStatus->id)->count(),
                ])->extends('layouts.side')
                ->section('content');
        }else
        {
            return view('livewire.contacts.index',
                [
                    'orders' => $this->orderSearch(),
                    'clubs' => Club::all(),
                    'categories' => CategoryOrder::all(),
                    'Completed' => Order::where('user_id', Auth::user()->id)->where('status', 'مكتملة')->count(),
                    'pending' => Order::where('user_id', Auth::user()->id)->where('status', 'تحت التنفيذ')->count(),
                    'allOrders' => Order::where('user_id', Auth::user()->id)->count(),
                ])->extends('layouts.side')
                ->section('content');
        }
    }
}
