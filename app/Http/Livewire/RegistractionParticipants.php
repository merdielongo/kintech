<?php

namespace App\Http\Livewire;

use App\Models\Edition;
use App\Models\Participant;
use App\Models\Person;
use Exception;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Twilio\Rest\Client;

class RegistractionParticipants extends Component
{

    public $name;
    public $last_name;
    public $first_name;
    public $sex = 'H';
    public $mail;
    public $phone;

    protected $rules = [
        'name'          => 'string|nullable',
        'last_name'     => 'string|nullable|required',
        'first_name'    => 'string|required',
        'mail'          => 'required',
        'phone'         => 'required',
    ];


    public function render()
    {
        return view('livewire.registraction-participants');
    }

    public function submit() {
        $this->validate();

        $person_  = Person::query()->where('phone', $this->phone)->first();
        $person = new Person();
        $participant = new Participant();
        $account_sid = $_ENV["TWILIO_ACCOUNT_SID"];
        $auth_token = $_ENV["TWILIO_AUTH_TOKEN"];

        try {
            $person->name       = $this->name;
            $person->last_name  = $this->last_name;
            $person->first_name = $this->first_name;
            $person->sex        = $this->sex;
            $person->mail       = $this->mail;
            $person->phone      = $this->phone;

            if($person->save()) {
                $participant->person_id  = $person->id;
                $participant->edition_id = 2;
                $participant->exp = Carbon::create(2022, 12, 25);

                if($participant->save()) {
                    // $client = new Client($account_sid, $auth_token);
                    // $client->messages->create($person->phone, [
                    //     "from" => "KinTech",
                    //     "body" => "Félicitation, votre enregistrement à été effectuée avec succès, nous vous contacterons très prochainement pour vous tenir informé des activités organisée par nos services, merci et à bientôt"
                    // ]);
                    $this->reset();
                    session()->flash('message', 'Félicitation, votre enregistrement à été effectuée avec succès');
                }else {
                    session()->flash('message', 'Un probleme est survenue pendant votre inscrption');
                }

            }else{
                session()->flash('message', 'Un probleme est survenue pendant votre inscrption');
            }

        } catch (Exception $e) {
            //throw $th;
            dd($e);
        }

    }
}
