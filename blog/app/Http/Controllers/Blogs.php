<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Mail; 
use App\Blog;

class Blogs extends Controller
{
    public function submit(Request $req){

        $req->validate([
            'user' => 'required',
            'password' => 'required|min: 8|max: 10'
        ]);
        $req->session()->flash('data','Form submitted successfully');
        return redirect('/');//$req->input();
    }

    public function testdb(Request $req){
        //$users = DB::select('select * from users');
        //$users = DB::table('users')->get();
        //$users = DB::table('users')->where('id', '1')->get();
        //$users = DB::table('users')->find(1); // find woks only with id column
        //$users = DB::table('users')->count();
        // $users = DB::table('employee')->insert([
        //     'name' => 'Ankit',
        //     'age' => '35',
        //     'salary' => '4000000.0'
        // ]);
        // $users = DB::table('employee')->
        // where([
        //     'name' => 'Ankit'
        // ])->
        // update([
        //     'age' => '36'
        // ]);
        // $users = DB::table('employee')->
        // where([
        //     'name' => 'Ankit'
        // ])->delete();
        // $users = DB::table('employee')->max('id');
        // $users = DB::table('users')->
        // select('posts.title', 'users.name')->
        // join('posts', 'users.id', 'user_id')->
        // where('users.name','Sumit')->
        // get();
        //print_r($users);

        //$posts = Blog::all()->paginate(1);

        $to_name="Ankit Gupta";
        $to_email="ankithbti007@gmail.com";
        $data = array('name'=>'Peter', 'body'=>'Test mail from localhost');
        Mail::send('mail', $data, function($message) use ($to_name, $to_email){
            $message->to($to_email)->subject('Subject of mail');
        });

        $posts = DB::table('posts')->paginate(2);
        return view('blogs', ['posts'=>$posts]);
    }
}
