<?php

namespace App\Livewire;
use App\Models\Member;

use Livewire\Component;

class Members extends Component
{
    public function render()
    {
        $members = Member::all();

        return view('livewire.members', [
            'members' => $members
        ]);
    }
}
