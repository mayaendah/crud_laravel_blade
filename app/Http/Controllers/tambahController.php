<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tambahModel;

use Illuminate\Support\Facades\Session;

class tambahController extends Controller
{
    public function __construct()
    {
        $this->middleware('authcek');

    }
    public function index(){
        $bio=tambahModel::all();
        return view('pages.tampil',['bio'=>$bio]);
    }

    public function tambahform(){
        return view('pages.tambah');
    }

    public function  simpanData(Request $request){
    $request->validate([
            'nama'=>'required',
            'nis'=>'required|unique:tambah_models',
            'kelas'=>'required',
            'tmtlhr'=>'required',
            'tgllhr'=>'required',
        ],
        [
            'nama.required'=>'Nama tidak boleh kosong',
            'nis.required'=>'NIS tidak boleh kosong',
            'nis.unique'=>'NIS sudah terdaftar',
            'kelas.required'=>'Kelas tidak boleh kosong',
            'tmtlhr.required'=>'Tempat lahir tidak boleh kosong',
            'tgllhr.required'=>'Tanggal tidak boleh kosong',
        ]);

        $data=tambahModel::create([
            'nama'=>$request->nama,
            'nis'=>$request->nis,
            'kelas'=>$request->kelas,
            'tmtlhr'=>$request->tmtlhr,
             'tgllhr'=>$request->tgllhr,
        ]);

        if($data){
            Session::flash('sukses','Tambah data SUKSES!!!');
		    return redirect('/tambah');
        }

    }



    public function ubah($id){
        $bioUbah=tambahModel::findOrFail($id);
    //    dd($bioUbah);die();
        return view('pages.ubah', ['bioUbah' => $bioUbah]);

    }

    public function data($id, Request $request){

        $request->validate([
            'nama'=>'required',
            'nis'=>'required',
            'kelas'=>'required',
            'tmtlhr'=>'required',
            'tgllhr'=>'required',
        ],
        [
            'nama.required'=>'Nama tidak boleh kosong',
            'nis.required'=>'NIS tidak boleh kosong',
            'kelas.required'=>'Kelas tidak boleh kosong',
            'tmtlhr.required'=>'Tempat lahir tidak boleh kosong',
            'tgllhr.required'=>'Tanggal tidak boleh kosong',
        ]);

        $bioupdate=tambahModel::findOrFail($id);
        $bioupdate->nama=$request->nama;
        $bioupdate->nis=$request->nis;
        $bioupdate->kelas=$request->kelas;
        $bioupdate->tmtlhr=$request->tmtlhr;
        $bioupdate->tgllhr=$request->tgllhr;
        $bioupdate->save();

        Session::flash('sukses','Update data SUKSES!!!');
        return redirect('/');
    }


    public function hapusData($idHapus){
        $bioHapus=tambahModel::findOrFail($idHapus);
        $bioHapus->delete();
        Session::flash('sukses','Hapus data SUKSES!!!');
        return redirect('/');
    }
}
