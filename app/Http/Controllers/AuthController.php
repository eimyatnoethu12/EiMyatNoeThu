<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     //data

    public function Homepage(Request $req){
      $data=$this->getpostData($req);
    //   dd($data);
      User::create($data);
      return back();

    }

  //homw
  public function Data(){
    return view('welcome');
  }

    #get data
    private function getPostData($req){
        return[
            'clientname'=>$req->clientname,
            'mail'=>$req->mail,
            'subject'=>$req->subject,
            'clientmessage'=>$req->clientmessage
        ];
    }
}
