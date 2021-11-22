<?php


namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Auth;



class testController extends Controller
{
   public function test(){
       return "hi : ".Auth::user()->name;
   }
    
}