<?php

namespace App\Http\Controllers;
use App\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    public function index(){
        $consumers =Consumer::all();
        return view('consumer.index', compact('consumers'));
    }

    public function create(){
        $consumer = new Consumer();
        return view('consumer.create', compact('consumer'));
    }

    public function store(){
        /*$data=request()->validate([
            'name'=> 'required',
            'email'=> 'required|email'
        ]);*/

        $consumer = Consumer::create($this->validatedData());
        return redirect('/consumers/' . $consumer->id);
    }

    public function show(Consumer $consumer){
        //dd($consumer);
        //$consumer = \App\Consumer::findOrFail($consumerId);
        return view('consumer.show',compact('consumer'));
        //dd($consumer);
    }

    public function edit(Consumer $consumer){
        return view('consumer.edit', compact('consumer'));
    }

    public function update(Consumer $consumer){
        /*$data=request()->validate([
            'name'=> 'required',
            'email'=> 'required|email'
        ]);*/

        $consumer->update($this->validatedData());
        return redirect('/consumers');
    }

    public function destroy(Consumer $consumer){
        $consumer->delete();
        return redirect('/consumers');
    }

    protected function validatedData(){
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
    }

}
