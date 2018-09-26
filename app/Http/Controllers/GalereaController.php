<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalereaController extends Controller
{
    public function index()
    {
    //получение данных фотографий
        $data = [];
        return view('frontend.index', ['data' => $data]);
    }
}
