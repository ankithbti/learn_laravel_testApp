<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index(Request $req){
        print_r($req->input());
        echo '<br>';
        echo "Method: " . $req->method() . '<br>';
        echo "Url: " . $req->url() . '<br>';
        echo "FullUrl: " . $req->fullUrl() . '<br>';
        echo "Path: " . $req->path() . '<br>';
        echo "Query: " . print_r($req->query()) . '<br>';
        
        if($req->isMethod('GET')){

        }else{
            // error method for index
        }


        echo "100 users are here";
    }

    public function show($id){
        //echo $id . " -> this user was here.";
        return ["id" => $id];
    }
}
