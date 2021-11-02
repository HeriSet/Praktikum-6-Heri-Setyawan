<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(){
        return view('daftarmenu');
}
public function proses_pesanan(Request $request){
  

    $makanan = $request->input('makanan');
    $minuman = $request->input('minuman');

    return view ('pesanan',[
        'makan'=> $makanan,
        'minum' => $minuman,
    ]);
}

}