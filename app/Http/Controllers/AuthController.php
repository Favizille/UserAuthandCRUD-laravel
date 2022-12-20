<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\loginRequest;

class AuthController extends Controller
{
    protected const TRUE = true;
    protected const FALSE = false;
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function registerView(){
        return view("register");
    }

    public function loginView(){
        return view("login");
    }

    public function registration(AuthRequest $request){
      $validated = $request->validated();

      $validated['password'] = bcrypt($validated['password']);

        if(!$user = $this->user->create($validated)){
            return [
                "status" => self::FALSE,
                "message" => "User not registered",
            ];
        }

        return [
            "status" => self::TRUE,
            "user" => $user,
        ];
    }

    public function loggingIn(loginRequest $request){
        $validated = $request->validated();

        if(!auth()->attempt([
            'Identification_number' => $validated['Identification_number'],
            'email' => $validated['email'],
            'password' => $validated['password']
            ])){

            return [
                "status" => self::FALSE,
                "message" => "Invalid Credientials"
            ];
        }

        auth()->login($this->user->where("email", $validated['email'])->first());

        return [
            "status" => self::TRUE,
            "user" => auth()->user(),
        ];
    }

    public function logout(){
        return auth()->logout();
    }
}
