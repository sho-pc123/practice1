<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $auth = $request->only('email', 'password');

        if (Auth::attempt($auth)) {
            return redirect( route('home') );
        }

        return redirect( route('home') );

    }

    public function register(Request $request){
        $user_information = $request->all();

        DB::transaction(function() use($user_information){
            //電話番号とemailが既に存在しているか
            $phone_number_exists = User::where('phone_number', '=', $user_information['phone_number'])
            ->exists();
            $email_exists = User::where('email', '=', $user_information['email'])
            ->exists();

            if(!$phone_number_exists && !$email_exists){
                User::insert([
                    //誤字修正予定
                    'name_surneme' => $user_information['name_surneme'],
                    'name_first' => $user_information['name_first'],
                    'name_surneme_furigana' => $user_information['name_surneme_furigana'],
                    'name_first_furigana' => $user_information['name_first_furigana'],
                    'gender' => $user_information['gender'],
                    'dirthday' => $user_information['dirthday'],
                    'post_code' => $user_information['post_code'],
                    'prefectures' => $user_information['prefectures'],
                    'municipalities' => $user_information['municipalities'],
                    'address' => $user_information['address'],
                    'building_name' => $user_information['building_name'],
                    'phone_number' => $user_information['phone_number'],
                    'email' => $user_information['email'],
                    'password' => Hash::make($user_information['password']),
                ]);
            }
        });

        return redirect( route('home') );
    }

    public function logout(){
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect( route('home') );
    }
}
