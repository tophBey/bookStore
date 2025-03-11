<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){


        $users = User::where('name', '!=', 'super admin')->paginate(10);

        return view('dashboard.layout.user.index', compact('users'));
    }
}
