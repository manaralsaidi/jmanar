<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StaticController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function scientists()
    {
        return view('scientists');
    }
}
