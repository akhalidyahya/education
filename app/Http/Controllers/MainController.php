<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
  // public function __construct(request $request) {
  //   $request->session()->flush();
  // }

  public function index() {
    return  view('home');
  }

  public function validation(request $request){
    if($request->input('password') == 'EGrtz322') {
      $request->session()->put('validation_status', 'valid');
      return redirect('form');
    } else {
      $request->session()->flush();
      $request->session()->flash('status', 'Are you the right people?');
      return redirect('/');
    }
  }

  public function form(request $request) {
    if($request->session()->has('validation_status')){
      return view('form');
    } else {
      $request->session()->flash('status', 'Are you the right people?');
      return redirect('/');
    }
  }

  public function store(request $request) {
    
  }
}
