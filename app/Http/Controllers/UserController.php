<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    protected const TRUE = true;
    protected const FALSE = false;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    private function unauthorizedUser() {

        return auth()->user() === false;

    }

    private function successResponse($data){
        return [
            "status" => self::TRUE,
            "message" => "Successful",
            "data" => $data,
        ];
    }

    private function failResponse(){

        return [
            "status" => self::FALSE,
            "message" => "failed",
        ];
    }

    public function allUsers()
    {
        $users = $this->user->all();

        return $users;
    }

    public function getUser($userId){

        $user = $this->user->find($userId);

        return $user;
    }

    public function updateUser(Request $request, $userId){

        $user = $this->user->find($userId);

        if($this->unauthorizedUser()){

            return $this->failResponse();
        }

        $user->update($request->all());

        return $this->successResponse($request);

    }


    public function deleteUser( $userId){

        $user = $this->user->find($userId);

        if(!$user){

            return $this->failResponse();
        }

        return $user->delete();
    }

}
