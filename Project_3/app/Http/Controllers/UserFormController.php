<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        // return $req->input(); //{"firstName":"filip","lastName":"buszewicz"}
        // return $req->input('firstName'); //filip
        // return $req->path(); //UserFormController
        //return $req->url(); //http://localhost:8000/UserFormController
        // return $req->method(); //GET
        // return $req->all(); //{"firstName":"filip","lastName":"buszewicz"}
        $dataUser = [
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName'),
        ];
        return view('user', ['user' => $dataUser]);


    }
}
