<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;
use Carbon\Carbon;


class MemberCreate extends Component
{
    //Wire models
    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $jmbg;
    public $email;
    public $membership_price;
    public $phone;

    //Not wire  models
    public $date_started;
    public $date_ended;
    public $is_active;

    


    public function mount(){
        $this->date_started = Carbon::now();
        $this->date_ended = Carbon::now()->addDays(30);
        $this->is_active = 1;
    }

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'date_of_birth' => 'required',
        'jmbg' => 'required|min:13|max:13',
        'email' => 'required',
        'membership_price' => 'required',
        'phone' => 'required'
    ];


    public function store(){
        $this->validate();

        //Creating new member
        $member = new Member();
        $member->first_name = $this->first_name;
        $member->last_name = $this->last_name;
        $member->date_of_birth = $this->date_of_birth;
        $member->jmbg = $this->jmbg;
        $member->email = $this->email;
        $member->membership_price = $this->membership_price;
        $member->phone = $this->phone;
        $member->date_started = $this->date_started;
        $member->date_ended = $this->date_ended;
        $member->is_active = $this->is_active;
        $member->save();
        //

        $this->reset();
        $this->dispatch('memberWasCreated');
    }


    public function render()
    {
        return view('livewire.member-create');
    }
}
