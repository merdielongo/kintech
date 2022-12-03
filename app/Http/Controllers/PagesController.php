<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function home() {
        return view('pages.home');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    public function exposition() {
        return view('pages.exposition');
    }

    public function sponsor() {
        return view('pages.sponsor');
    }

    public function enregistrement() {
        return view('pages.enregistrement');
    }

    public function sponsoring() {
        return view('pages.sponsoring');
    }

    public function project() {
        return view('pages.project');
    }

    public function register() {
        return view('pages.register');
    }

    public function event() {
        return view('pages.event');
    }

    public function program() {
        return view('pages.program');
    }

    public function ateliers() {
        return view('pages.ateliers');
    }

}
