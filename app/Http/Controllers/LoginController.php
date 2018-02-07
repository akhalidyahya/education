<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class LoginController extends Controller
{
  public function __construct()
  {

  }

  public function index()
  {
    return view('login');
  }

  public function login(request $request)
  {
    $username = $request->input('username');
    $password = md5($request->input('pass'));

    $status = DB::table('admins')
                   ->where('username',$username)
                   ->where('password',$password)
                   ->count();
    if($status > 0) {
      $status = DB::table('admins')
                     ->where('username',$username)
                     ->where('password',$password)
                     ->get()
                     ->first();
      $request->session()->put('id', $status->id);
      $request->session()->put('nama', $status->nama);
      $request->session()->put('login_status', 'login');
      return redirect('dashboard');
    }
  }

  public function logout(request $request){
    $request->session()->flush();
    return redirect('login');
  }
}
