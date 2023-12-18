<?php

namespace App\Livewire;
use App\Models\Member;

use Livewire\Component;

class Members extends Component
{
    protected $listeners = ['memberWasCreated' => '$refresh'];
    public $search="";

    protected $queryString = ['search'];

    //sort
    public $sort_direction = 'desc';


    public function changeOrder($sort_direction){
        $this->sort_direction = $sort_direction;
    }


    public function render()
    {
        return view('livewire.members', [
            'members' => Member::when(strlen($this->search) >= 2, function($query){
                return $query->where('first_name', 'like', '%'.$this->search.'%');
            })
            ->orderBy('created_at', $this->sort_direction)
            ->get()
       ]);
    }
}
