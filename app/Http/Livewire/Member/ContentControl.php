<?php

namespace App\Http\Livewire\Member;

use App\Models\Alert;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ContentControl extends Component
{

    use WithPagination;
    protected $listeners = ['updated' => '$refresh'];

    public function render()
    {
        return view('livewire.member.content-control',
        ['alerts' => Alert::where('alerts.member_id',Auth::user()->member->id)->latest()->paginate(5)]
        );
    }
}
