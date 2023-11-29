<?php

namespace App\Livewire;
use App\Models\Member;

use Livewire\Component;

class Members extends Component
{
    protected $listeners = ['memberWasCreated' => '$refresh'];
    public $search="";

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.members', [
            'members' => Member::when(strlen($this->search) >= 2, function($query){
                return $query->where('first_name', 'like', '%'.$this->search.'%');
            })
            ->orderBy('created_at', 'desc')
            ->get()
       ]);
    }
}
