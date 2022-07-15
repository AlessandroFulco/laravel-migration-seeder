<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class HomeController extends Controller
{
    public function index() {
        $data = [
            'listTrain' => Train::all()
        ];
        return view('home', $data);
    }
}
