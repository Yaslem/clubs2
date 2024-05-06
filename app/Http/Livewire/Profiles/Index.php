<?php

namespace App\Http\Livewire\Profiles;

use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['IndexProfile' => 'Index'];

    public $showIndex = true,
            $showAward = false,
            $showCertificate = false,
            $showEditUser = false,
            $showReset = false;

    public function Index()
    {
        $this->showIndex = true;
        $this->showAward = false;
        $this->showCertificate = false;
        $this->showEditUser = false;
        $this->showReset = false;
    }

    public function Certificate()
    {
        $this->showCertificate = true;
        $this->showIndex = false;
        $this->showAward = false;
        $this->showEditUser = false;
        $this->showReset = false;
    }

    public function Award()
    {
        $this->showAward = true;
        $this->showIndex = false;
        $this->showCertificate = false;
        $this->showEditUser = false;
        $this->showReset = false;
    }

    public function Edit()
    {
        $this->showEditUser = true;
        $this->showAward = false;
        $this->showIndex = false;
        $this->showCertificate = false;
        $this->showReset = false;
    }

    public function ResetPassword()
    {
        $this->showReset = true;
        $this->showEditUser = false;
        $this->showAward = false;
        $this->showIndex = false;
        $this->showCertificate = false;
    }
    public function render()
    {
        return view('livewire.profiles.index')
            ->extends('layouts.side')
            ->section('content');

    }
}
