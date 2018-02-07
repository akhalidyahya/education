<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function index(request $request)
    {
      if($request->session()->has('login_status')){
        $data['data_info'] = DB::table('datas');
        return view('admin_pages/dashboard',$data);
      } else {
        return redirect('login');
      }
    }

    public function data(request $request)
    {
      if($request->session()->has('login_status')){
        $data['data_info'] = DB::table('datas')->paginate(10);
        return view('admin_pages/data',$data);
      } else {
        return redirect('login');
      }
    }

    public function detail(request $request, $id){
      if($request->session()->has('login_status')){
        $data['detail'] = DB::table('datas')->where('id', $id)->get();
        return view('admin_pages/detail',$data);
      } else {
        return redirect('login');
      }
    }

    public function destroy(Request $request, $id)
    {
        DB::table('datas')->where('id', $id)->delete();
        $request->session()->flash('status', 'Task was successful!');
        return redirect('data');
    }

    public function search(Request $request) {
      $string = $request->search;
      $data['data_info'] = DB::table('datas')
                              ->where('nama','like',$string.'%')
                              ->orwhere('nama','like','%'.$string)
                              ->orwhere('nama','like','%'.$string.'%')
                              ->paginate(10);
      return view('admin_pages/data',$data);
    }
}
