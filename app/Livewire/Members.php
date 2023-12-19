<?php

namespace App\Livewire;
use App\Models\Member;

use Livewire\Component;

class Members extends Component
{
    protected $listeners = ['memberWasCreated' => '$refresh'];
    public $search="";

    //Filters
    public $first_name = "";
    public $last_name = "";
    public $jmbg = "";
    public $email = "";
    public $month_started;
    public $activity;

    //Sort
    public $sort_direction = 'desc';

    //Query Strings
    protected $queryString = ['search', 'first_name', 'last_name', 'jmbg', 'email'];

    public function changeOrder($sort_direction){
        $this->sort_direction = $sort_direction;
    }

    public function filterMonth(){
        dd($this->month_started);
    }


    public function render()
    {
        return view('livewire.members', [
            'members' => Member::when(strlen($this->search) >= 2, function($query){
                return $query->where('first_name', 'like', '%'.$this->search.'%');
            })
            ->when(strlen($this->first_name) >= 2, function($query){
                return $query->where('first_name', 'like', '%'.$this->first_name.'%');
            })
            ->when(strlen($this->last_name) >= 2, function($query){
                return $query->where('last_name', 'like', '%'.$this->last_name.'%');
            })
            ->when(strlen($this->jmbg) == 13, function($query){
                return $query->where('jmbg', 'like', '%'.$this->jmbg.'%');
            })
            ->when(strlen($this->email) >= 3, function($query){
                return $query->where('email', 'like', '%'.$this->email.'%');
            })
            ->when($this->month_started, function($query) {
                return $query->whereRaw('DATE_FORMAT(date_started, "%Y-%m") = ?', [$this->month_started]);
            })
            ->when($this->activity !== null, function($query) {
                $query->where('is_active', (bool)$this->activity);
            })
            ->orderBy('created_at', $this->sort_direction)
            ->get()
       ]);
    }
}
