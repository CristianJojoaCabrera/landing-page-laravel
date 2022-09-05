<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use App\Models\UserWinner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function store (StoreUserRequest $request)
    {
        $code = substr(str_shuffle('123456789'), 0, 8); // Randomly shuffles a string
        $password = Hash::make($code);
        User::create(array_merge($request->all(),['password' => $password]) );
        $winner = $this->get_winner();
        if($winner['state']){
            return redirect()->route('/')
                ->with('status','¡Registro Exitoso!')
                ->with('winner',$winner['user']);
        }
        return redirect()->route('/')
            ->with('status','¡Registro Exitoso!');

    }

    public function get_winner()
    {
        $users = User::all();
        if($users->count() % 5 == 0)
        {
            do
            {
                $user = $users->random();
            }while(UserWinner::where('user_id',$user->id)->exists());
            UserWinner::create(['user_id'=>$user->id]);
            $user_full_name =
                "FELICIDADES ESTE ES EL NUEVO GANADOR DE UNO DE NUESTROS PRODUCTOS: ".$user->name." ".$user->last_name;
            return ['state'=>true,'user'=> $user_full_name];
        }
        return ['state'=>false,'user'=>''];
    }
}
