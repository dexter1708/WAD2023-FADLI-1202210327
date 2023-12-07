<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view('Showroom.create');
    }
    
    public function store(Request $request){
        $data =$request -> all ();

        Showroom :: create ([
            'nama_mobil'=> $data ['name'],
            'brand_mobil'=> $data ['brand'],
            'warna_mobil'=> $data ['warna'],
            'tipe_mobil'=> $data ['tipe'],
            'harga_mobil'=> $data ['harga'],


        ]);
        return redirect (route('Showroom.index'));
    }
    public function index(){
        $Showroom=Showroom::all();

        return view ('showroom/index', compact ('showroom'));
    }
}
