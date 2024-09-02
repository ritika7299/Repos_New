<?php

namespace App\Controllers;

class Room extends BaseController
{
    public function index()
    {
        return view('check-availability');
    }

}