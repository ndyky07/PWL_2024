<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return "Nama: Indi Warda Ramadhani <br>NIM: 2341760026";
    }
}