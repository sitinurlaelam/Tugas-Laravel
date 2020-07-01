<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function Register(){
       return view('register');
   } //

   public function welcome(Request $request){
       $namaDpn= $request["namaDpn"];
       $namaBlkg= $request["namaBlkg"];
       return view('Welcom', ["namaDpn"=>$namaDpn, "namaBelakang"=> $namaBlkng]);
    }

}