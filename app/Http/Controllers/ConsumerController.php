<?php

namespace App\Http\Controllers;
use App\Consumer;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConsumerController extends Controller
{
    public function index(Request $request){

        //dd($request->query('active'));

        $consumers =Consumer::where('active', $request->query('active',1))->get();
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

        Mail::to($consumer->email)->send(new WelcomeMail());

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
