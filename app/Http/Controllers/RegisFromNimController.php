<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisFromNimController extends Controller
{
    private $response;

    public function __construct()
    {
        $this->response = [
            'status' => '',
            'data' => '',
            'message' => ''
        ];
    }

    public function check(Request $request)
    {
        if ($request->input('nim')) {
            $data = User::where('nim', $request->input('nim'))->first();
            if (!$data) {
                $this->response['status'] = 'Failed';
                $this->response['data'] = 'Not Found';
                $this->response['message'] = 'Nim Not Found';
                return response($this->response, 404);
            } else {
                $this->response['status'] = 'Success';
                $this->response['data'] = $data;
                $this->response['message'] = 'Nim Found';
                return response($this->response, 200);
            }
        } else {
            $this->response['status'] = 'Failed';
            $this->response['data'] = 'Not Found';
            $this->response['message'] = 'Nim Is Required';
            return response($this->response, 500);
        }
    }

    public function login(Request $request)
    {
        $nim = $request->input('nim');
        $user =  User::where('nim', $nim)->first();
        $password = Hash::check($request->input('password'), $user->password);

        if ($user && $password == 1) {
            Auth::login($user, true);
            return response('Success', 200);
        } else {
            return response('Failed', 404);
        }
    }

    public function regis(Request $request)
    {
        if ($request->input('nim') && $request->input('email')) {
            User::where('nim', $request->input('nim'))->update('email', $request->input('email'));
            $this->response['status'] = 'Success';
            $this->response['message'] = 'Email has Update for NIM' . $request->input('nim');
            return response($this->response, 200);
        } else {
            $this->response['status'] = 'Failed';
            $this->response['data'] = 'Not Found';
            $this->response['message'] = 'Nim and Email is Required';
            return response($this->response, 404);
        }
    }
}
