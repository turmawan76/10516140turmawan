<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
   public function index()
   {
   	$data['tokmul'] = \DB::table('dagangan')->get();
   	return view('menu', $data);
   } //
}
