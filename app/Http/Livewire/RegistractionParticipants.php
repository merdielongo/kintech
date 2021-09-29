<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistractionParticipants extends Component
{

    public $name;
    public $last_name;
    public $first_name;
    public $sex;
    public $mail;
    public $phone;

    protected $rules = [
        'name'          => 'required',
        'last_name'     => 'required',
        'first_name'    => 'required',
        'sex'           => 'required',
        'mail'          => 'required',
        'phone'         => 'required',
    ];


    public function render()
    {
        return view('livewire.registraction-participants');
    }

    public function submit() {
        $this->validate();
    }
}
