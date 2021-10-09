<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Twilio\Rest\Client;

class ProjectRegister extends Component
{
    use WithFileUploads;

    public $team_name;
    public $name;
    public $manager;
    public $activity;
    public $email;
    public $phone;
    public $address;
    public $website;
    public $page;
    public $identity;
    public $project;

    protected $rules = [
        'team_name' => ['required'],
        'name'      => ['required'],
        'manager'   => ['required'],
        'activity'  => ['required'],
        'email'     => ['required'],
        'phone'     => ['required'],
        'identity'  => ['required', 'file'],
        'project'   => ['required', 'file'],
    ];

    public function render()
    {
        return view('livewire.project-register');
    }

    public function save() {
        $this->validate();

        $identity = time().$this->manager.'-'.$this->identity->getClientOriginalName();
        $project = time().'-'.$this->project.'-'.$this->manager.'-'.$this->identity->getClientOriginalName();

        $identity_path  = $this->identity->storeAs('identities', $identity);
        $project_path   = $this->identity->storeAs('projects', $project);

        $project_        = Project::where('phone', $this->phone)->first();

        $account_sid    = $_ENV["TWILIO_ACCOUNT_SID"];
        $auth_token     = $_ENV["TWILIO_AUTH_TOKEN"];

        $projects = new Project();

        $projects->edition_id   = 1;
        $projects->team_name    = $this->team_name;
        $projects->project_name = $this->name;
        $projects->manager      = $this->manager;
        $projects->activity     = $this->activity;
        $projects->email        = $this->email;
        $projects->phone        = $this->phone;
        $projects->address      = $this->address;
        $projects->website      = $this->website;
        $projects->page         = $this->page;
        $projects->identity     = $identity_path;
        $projects->project      = $project_path;

        if($project_ == null) {
            if($projects->save()) {
                // $client = new Client($account_sid, $auth_token);
                // $client->messages->create($this->phone, [
                //     "from" => "KinTech",
                //     "body" => "Félicitation, votre enregistrement à été effectuée avec succès, nous vous contacterons très prochainement pour vous tenir informé des activités organisée par nos services, merci et à bientôt"
                // ]);
                session()->flash('message', 'Félicitation, votre enregistrement à été effectuée avec succès');
            }else {
                session()->flash('error', 'Un probleme est survenue pendant votre inscrption');
            }
        }else {
            session()->flash('error', 'Votre numéro est deja utiliser comme identifiant dans un autre projet');
        }

    }
}
