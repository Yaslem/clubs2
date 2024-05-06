<?php

namespace App\Http\Livewire\ClubsReports;

use App\Models\ClubsReports;
use App\Traits\ImageUploadTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads, ImageUploadTrait;

    public $title, $image;

    public function index(){
        $this->emit('index');
    }

    protected function rules(){
        return [
            'title' => 'required',
            'image' => 'required',
        ];
    }

    protected function messages(){
        return [
            'title.required' => 'العنوان مطلوب.',
        ];
    }

    public function save(){
        $this->validate();
        if($this->image){
            $image = $this->uploadImages('files', 'clubsReports', $this->image);
            ClubsReports::create([
                'title' => $this->title,
                'image' => $image,
            ]);
            session()->flash('message', 'تم إضافة التقرير بنجاح!');
            $this->index();
        }else{
            ClubsReports::create([
                'title' => $this->title,
            ]);
            session()->flash('message', 'تم إضافة التقرير بنجاح!');
            $this->index();
        }
    }

    public function render()
    {
        return view('livewire.clubs-reports.add');
    }
}
