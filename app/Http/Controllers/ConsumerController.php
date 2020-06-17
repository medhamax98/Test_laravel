<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function index(){
        $consumers =\App\Consumer::all();
        return view('consumer.index', compact('consumers'));
    }

    public function create(){
        return view('consumer.create');
    }

    public function store(){
        $data=request()->validate([
            'name'=> 'required',
            'email'=> 'required|email'
        ]);

        \App\Consumer::create($data);
        return redirect('/consumers');
    }
}
