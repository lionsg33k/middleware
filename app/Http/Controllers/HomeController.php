<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function indexParticipant()
    {
        return view("participant.participant");
    }
    public function indexOrganizer()
    {
        return view("organizer.organizer");
    }
}
