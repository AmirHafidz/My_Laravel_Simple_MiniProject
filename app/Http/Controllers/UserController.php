<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//untuk database
use App\Models\User;
use Illuminate\Pagination\Paginator;


class UserController extends Controller
{
    function login(Request $req){
        // return $req->all();
        // return $req->password;
        // $user = User::where(['email'=>$req->email])->first();
        // $password = User::where(['password'=>$req->password])->first();

        // return  'password' . $req->password;
    
        $user = User::where(['email'=>$req->email])
        ->where(['password'=>$req->password])->first();
        // return 'user' . $user;

        if(!$user){
            return "Username or password is not matched!";
        }
        else{
            $req->session()->put('user',$user);
            // return view('home');
            // return redirect('/?success=true');
            return view('home',['/?success=true']);
            // return 'user'.$user;
            
        }
    }

    function getuser(Request $req)
    {
        $data= DB::table('users')
        ->where('id',$req->rid)
        ->first();

        return view('edituser',['users'=>$data]);
    }

    function edituser(Request $req){
        DB::table('users')->where('id',$req->rid)
        ->update(array(
            'name' => $req->fullname,
            'password' => $req->password,
            'email' => $req->email,
            // 'updated_at'=> now()
            'updated_at' => DB::raw('NOW()')

            

        ));

        return redirect('editmyuser?rid='.$req->rid.'&success=1');
    }

    function register(Request $req){
        // return $req->input();
        // try{
        if($req->fullname === null || $req->email===null || $req->password===null){
            echo "<script>
                alert('Mana boleh kosong !!');
                window.location.href='/masuk';
                </script>";
            return false;
         }
         else{
            DB::insert('insert into users(name,email,password,created_at)values(?,?,?,?)',
            [$req->fullname,$req->email,$req->password,now()]);
            return "<script>
            function display(){
                document.querySelector('.kontena-container').style.opacity='1';
                // document.querySelector('.kontena-container').style.pointer-events='auto';
                }</script>";
            
         }
 
        // }

        // catch (\Exception){
        //     return "Failed to register";
        // }
            

            // return redirect()->back()->with('success', 'you have deleted the user !'); 

    }

    function listuser()
    {
        return view('viewuser',['users'=> DB::table
        ('users')->paginate(20)]);
    }

    function deleteuser(Request $req){
        DB::table('users')->where('id',$req->rid)->delete();
        return redirect()->back()->with('success', 'you have deleted the user !'); 
        // return view('viewuser');
    }

    function search(Request $req){
        return view(
            'viewuser',
            ['users' =>DB::table('users')
                ->select(DB::raw('id,name,email,password,created_at'))
                ->where('email','like','%'. $req->search. '%')
                ->orWhere('name','like','%'.$req->search.'%')->paginate(8)]
            
        );
    }






















}
