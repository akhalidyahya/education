<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
      $data['title'] = 'Please fill this Form';
      return view('form',$data);
    } else {
      $request->session()->flash('status', 'Are you the right people?');
      return redirect('/');
    }
  }

  public function store(request $request) {
    $data = [
      'nama' => $request->nama,
      'angkatan' => $request->angkatan,
      'jurusan' => $request->jurusan,
      'prodi' => $request->prodi,
      'ipk' => $request->ipk,
      'skripsi' => $request->skripsi,
      'no_telp' => $request->telp,
      'email' => $request->email,
      'instagram' => $request->instagram,
      'Web' => $request->web,
      'skripsi' => $request->skripsi,
      'sosmed' => $request->sosmed,
      'alamat' => $request->alamat,
      'kegiatan' => $request->kegiatan,
      'lainnya' => $request->lainnya,
      'tempat_kerja' => $request->tempat_kerja,
      'posisi' => $request->posisi,
      'jabatan' => $request->jabatan,
      'sertifikat' => $request->sertifikat,
      'lomba' => $request->lomba,
      'prestasi' => $request->prestasi,
      'minat_dosen' => $request->dosen,
      'created_at' => Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon::now()->toDateTimeString()
    ];

    DB::table('datas')->insert($data);
    $request->session()->flush();
    $request->session()->flash('success', 'Thanks for your submission!');
    return redirect('/');
  }
}
