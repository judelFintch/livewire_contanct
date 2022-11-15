<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Mail\ContactMail;

class ContactForm extends Component
{


    public $name, $email, $msg="";

    protected $rules = [
        'name' => 'bail|required',
        'email' => 'bail|required|email',
        'msg' => 'bail|required'
    ];

    public function submit(){
        $this->validate();

        // Envoie du mail
        Mail::to("wilo.ahadi@gmail.com")->send(new ContactMail($this->name, $this->email, $this->msg));

        // On flash un message d'alert
        session()->flash("alert", [
            'type' => "success",
            'text' => "Message envoyé ! Merci."
        ]);

        // On réinitialise les champs
        $this->reset([ 'name', 'email', 'msg' ]);
        
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
