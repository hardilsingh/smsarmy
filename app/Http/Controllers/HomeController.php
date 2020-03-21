<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Group;
use App\SMS;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $contacts = Contact::count();
        $groups = Group::count();
        $msg = SMS::count();
        return view('home' , compact(['contacts' , 'groups' , 'msg']));
    }
}
