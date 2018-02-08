<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Excel;

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
      if($request->session()->has('login_status')){
        DB::table('datas')->where('id', $id)->delete();
        $request->session()->flash('status', 'Task was successful!');
        return redirect('data');
      } else {
        return redirect('login');
      }
    }

    public function search(Request $request) {
      if($request->session()->has('login_status')){
        $string_nama = "";
        $string_angkatan = "";
        $string_jurusan = "";
        $string_prodi = "";
        $string_nama = $request->s_nama;
        $string_angkatan = $request->s_angkatan;
        $string_jurusan = $request->s_jurusan;
        $string_prodi = $request->s_prodi;

        $data['data_info'] = DB::table('datas')
                                ->where('nama','like','%'.$string_nama.'%')
                                ->where('angkatan','like','%'.$string_angkatan.'%')
                                ->where('jurusan','like','%'.$string_jurusan.'%')
                                ->where('prodi','like','%'.$string_prodi.'%')
                                ->paginate(10);
        return view('admin_pages/data',$data);
      } else {
        return redirect('login');
      }

    }

    public function download(request $request)
    {
      if($request->session()->has('login_status')){
        $data = DB::table('datas')
                      ->select('nama','angkatan','jurusan','prodi','ipk','skripsi','no_telp','email','instagram','web','sosmed','alamat','kegiatan','lainnya','tempat_kerja','posisi','jabatan','sertifikat','lomba','prestasi','minat_dosen')
                      ->get();
        $table = array_map( function($data){
          return (array) $data;
        },$data->toArray());
        return Excel::create('data_submission',function($excel) use ($table){
          $excel->sheet('sheet1',function($sheet) use($table){
            $sheet->fromArray($table);
          });
        })->download('xls');

      } else {

      }
    }
}
