<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textmau;	
class TextmauController extends Controller
{
    //
    public function GetThem(){
    	return view('themtext');
    }

    public function PostThem(Request $request){
    	$textmau = new Textmau ;
    	$textmau->intext = $request->intext;
    	$textmau->outtext = $request->outtext;
    	$textmau->save();
    	return 'thanhcong';
    }
    public function GetDanhsach(){
    	
    	$data['textmau'] = Textmau::all();
    	return view('danhsachtextmau',$data);
    }
}
