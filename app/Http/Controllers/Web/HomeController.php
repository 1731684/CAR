<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services = \App\Service::with('sub_services')->get();
        return view('web.home.index',['services'=>$services]);
    }
}
