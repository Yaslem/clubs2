<?php

namespace App\Http\Livewire\Certificates;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUserCertificate extends Component
{
    use WithPagination;
    public $user_id;

    protected $listeners = ['ShowUserCertificate'];

    public function show()
    {
        $this->emit('show');
    }
	
	  public function downloadCertificate($certificate)
    {
        return Storage::disk('files')->download($certificate);
    }

    public function ShowUserCertificate($id)
    {
        $this->user_id = $id;
    }

    public function render()
    {
        return view('livewire.certificates.show-user-certificate',
        [
            'user' => User::with('certificate')->where('id', $this->user_id)->first(),
        ]);
    }
}
