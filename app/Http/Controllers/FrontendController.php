<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\Car;
use App\Mail\SendMail;
use Mail;
use App\User;

class FrontendController extends Controller
{
    //index
    public function index(){
        $provinces= Province::limit(2)->get();
        return view('welcome',compact('provinces'));
    }


    //car
    public function car( $car,$id){
        $car=Car::find($id);
        return view('frontend.view',compact('car'));
    }

    //province 
    public function province($city){
        $cars=Province::where('slug',$city)->first()->cars()->paginate(20);
        $province=Province::where('slug',$city)->first();
        return view('frontend.province',compact('cars','province'));
    }

    //arriving soon
    public function arriving_soon(){
        $provinces=Province::where('slug','arriving-soon')->get();
        return view('frontend.arriving_soon',compact('provinces'));

    }

    //contact us
    public function contact(){
        return view('frontend.email');
    }

    public function email(request $request){
        return back();
    }


    public function newAccess(){
        return view('admin.user.access.index');
    }

    public function store(request $request){
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password'])
        ]);
        
        return redirect('login');
    }
}
