<?php

namespace App\Http\Controllers\Frontend;

use App\Models\weddings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeddingController extends Controller
{
    public function index(Weddings $wedding)
    {
        return view('frontend.weddings.index', compact('wedding'));
    }

    public function create()
    {
        $wedding = new Weddings;

        return view('backend.admin.weddings.form', compact('wedding'));
    }

    public function store()
    {
        
    }

    public function edit(weddings $wedding)
    {
        return view('backend.admin.weddings.form', compact('wedding'));
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
