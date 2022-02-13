<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vote;
use App\Mail\RegisMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
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
            $validate_email = strtolower($request->input('email'));
            $data = User::where('email', $request->input('email'))->first();
            if (str_contains($validate_email, 'student.nurulfikri.ac.id') || str_contains($validate_email, 'unf.ac.id')) {
                $this->response['status'] = 'Failed';
                $this->response['message'] = 'Email must use student.nurulfikri.ac.id or unf.ac.id';
                return response($this->response, 404);
            }
            if ($data) {
                $this->response['status'] = 'Success';
                $this->response['message'] = 'Email has Already Use Or Register';
                return response($this->response, 200);
            } else {
                $details = [
                    'nim' => $request->input('nim'),
                    'password' => $this->generateRandomString()
                ];
                Mail::to($request->input('email'))->send(new RegisMail($details));
                User::where('nim', $request->input('nim'))->update(['email' => $request->input('email'), 'status' => 1, 'password' => Hash::make($details['password'])]);
                $this->response['status'] = 'Success';
                $this->response['message'] = 'Email Success to Registered';
                return response($this->response, 200);
            }
        } else {
            $this->response['status'] = 'Failed';
            $this->response['data'] = 'Not Found';
            $this->response['message'] = 'Nim and Email is Required';
            return response($this->response, 404);
        }
    }

    public function countRegis()
    {
        $regis = DB::select('SELECT COUNT(status) AS jumlah, tahun FROM users WHERE status=1 GROUP BY tahun');
        $no_regis = DB::select('SELECT COUNT(status) AS jumlah, tahun FROM users WHERE status=0 GROUP BY tahun');

        $this->response['status'] = 'Success';
        $this->response['data'] = ['regis' => $regis, 'no_regis' => $no_regis];
        $this->response['message'] = 'All Data Registered';
        return response($this->response, 200);
    }
}
