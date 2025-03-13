<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan pesan selamat datang
    public function index()
    {
        return 'Welcome';
    }

    // Menampilkan nama dan NIM
    public function about()
    {
        return 'NIM: 2341760156, Name: Ilham';
    }

    // Menampilkan halaman artikel dengan ID
    public function articles($id)
    {
        return 'Article Page with ID ' . $id;
    }
}
