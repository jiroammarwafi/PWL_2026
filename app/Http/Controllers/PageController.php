<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return ('Selamat Datang (Dari Controller)');
    }

    public function about()
    {
        return 'Nama: Jiro Ammar Wafi <br>NIM: 244107020190 <br>(Dari Controller)';
    }

    public function articles($id)
    {
        return 'Halaman artikel dengan ID: ' . $id . ' <br>(Dari Controller)';
    }
}
