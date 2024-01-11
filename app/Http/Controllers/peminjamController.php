<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjam;

class peminjamController extends Controller
{
    function peminjaman(){
        return view('form');

    }
    function dataPeminjam(){
        $peminjams=peminjam::all();
        return view('peminjam',compact('peminjams'));
    }
    function peminjamanAdd(Request $request){
        $validate=$request->validate([
            'nama_peminjam'=>'required',
            'email'=>'required',
            'kontak'=>'required',
            'jenis_mobil'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required'
        ]);

        $input=new peminjam();
        $input->nama_peminjam=$request->nama_peminjam;
        $input->email=$request->email;
        $input->kontak=$request->kontak;
        $input->jenis_mobil=$request->jenis_mobil;
        $input->alamat=$request->alamat;
        $input->jenis_kelamin=$request->jenis_kelamin;
        $input->save();

        if ($input) {
            return redirect()->back()->with('berhasil','anda berhasil mengajukan peminjaman');
        }
    }

    function formDelete($id){


        $input=peminjam::find($id);
        $input->delete();

        if ($input) {
            return redirect()->back()->with('berhasil','anda berhasil mengajukan peminjaman');
        }
    }

    function formEdit(Request $request,$id){
        $peminjams=peminjam::findOrFail($id);
        return view('formEdit',compact('peminjams'));
    }

    function formUpdate(Request $request,$id){
        $validate=$request->validate([
            'nama_peminjam'=>'required',
            'email'=>'required',
            'kontak'=>'required',
            'jenis_mobil'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required'
        ]);

        $input=peminjam::find($id);
        $input->nama_peminjam=$request->nama_peminjam;
        $input->email=$request->email;
        $input->kontak=$request->kontak;
        $input->jenis_mobil=$request->jenis_mobil;
        $input->alamat=$request->alamat;
        $input->jenis_kelamin=$request->jenis_kelamin;
        $input->update();

        if ($input) {
            return redirect()->back()->with('berhasil','anda berhasil update peminjaman');
        }
    }
}
