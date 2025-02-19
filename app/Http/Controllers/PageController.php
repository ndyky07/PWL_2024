<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama : Indi Warda Ramadhani <br>NIM: 2341760026";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan ID: " . $id;
    }
}