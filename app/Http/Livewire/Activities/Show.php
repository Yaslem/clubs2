<?php

namespace App\Http\Livewire\Activities;

use App\Models\Reservation;
use Livewire\Component;

class Show extends Component
{
    public $title, $location, $from, $to, $presenter, $date, $is_share, $notes, $status, $hospitality, $projector, $club, $type, $created_at;

    protected $listeners = ['ShowActivity'];

    public function getActivity($related, $name)
    {
        if(($related))
        {
            return $related->$name;
        }else{
            return '---';
        }
    }

    public function ShowActivity($id)
    {
        $activity = Reservation::with(['club', 'location', 'type'])->find($id);

        $this->title = $activity->title;
        $this->location = $activity->location->name;
        $this->from = $activity->from;
        $this->to = $activity->to;
        $this->presenter = $activity->presenter;
        $this->date = $activity->date;
        $this->notes = $activity->notes;
        $this->status = $activity->status;
        $this->hospitality = $activity->hospitality;
        $this->projector = $activity->projector;
        $this->club = $activity->club->name;
        $this->type = $activity->type->name;
		$this->created_at = $activity->created_at;
		$this->is_share = $activity->is_share;

    }


    public $indexActivity = false;

    public function indexActivity()
    {
        $this->indexActivity = true;
        $this->emit('indexActivity');
    }


    public function render()
    {
        return view('livewire.activities.show')
            ->extends('layouts.side')
            ->section('title', 'Show Posts')
            ->section('content');
    }
}
