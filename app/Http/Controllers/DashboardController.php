<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index() {
        if(Auth::user()->role->name == 'Admin') {
            $doctors = User::where('role_id', '1')->get();
            return view('admin.layouts.content');
        } else if (Auth::user()->role->name == 'Doctor') {
            $my_appointments = Appointment::latest()->where('user_id', Auth::user()->id)->get();
            return view('admin.layouts.content');
        }
        return view('home');
    }
}
