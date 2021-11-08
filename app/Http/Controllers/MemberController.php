<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Person;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function index() {
        return view('pages.participation');
    }

    public function activeMember(Request $request) {
        if($person = Person::where('phone', request('phone'))->first()) {
            $participat = Participant::where('person_id', $person->id)->first();
            $participat->status = false;
            $participat->save();

            session()->flash('success', 'Votre numéro a ete valider');
            return back();
        }else {
            session()->flash('error', 'Votre numéro n\'est pas enregistre');
            return back();
        }
    }


}
