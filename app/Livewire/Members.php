<?php

namespace App\Livewire;
use App\Models\Member;

use Livewire\Component;

class Members extends Component
{
    protected $listeners = ['memberWasCreated' => '$refresh'];

    // public function memberWasCreated(){
    //     $this->resetPage();
    // }


    public function render()
    {

        $members = Member::all();

        return view('livewire.members', [
            'members' => $members
        ]);
    }
}
