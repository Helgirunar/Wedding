<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('backend.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('backend.admin.users.form', compact('user'));
    }

    public function store()
    {

    }

    public function edit(User $user)
    {
        return view('backend.admin.users.form', compact('user'));
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
