<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "NIM  : 2031710095 <br>";
        echo "Nama : Alifah Okta Nur Wardani";
    }

    public function articles ($id = 1) {
        echo "Halaman Artikel dengan ID " . $id;
    }
}
