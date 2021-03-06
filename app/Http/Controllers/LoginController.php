<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Mail\LoginMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Socialite;

function random_str($length, $keyspace = '0123456789')
{
    $str = '';
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $str .= $keyspace[random_int(0, $max)];
    }
    return $str;
}

class LoginController extends Controller
{

    public function requestPin(Request $request) {
      $user = User::updateOrCreate(['email' => $request->input('email')], ['pin' => random_str(6)]);
      Mail::to($user->email)->send(new LoginMail($user));
      return "sent";
    }

    public function login(Request $request) {
      $user = User::where('email', $request->input('email'))->where('pin', $request->input('pin'))->first();
      // always update to prevent reuse and brute force attacs
      User::updateOrCreate(['email' => $request->input('email')], ['pin' => random_str(6)]); 
      if($user) {
        Auth::login($user, true);
        return "success";
      } 
      return "fail";
    }
    
    public function logout() {
      Auth::logout();
      return redirect('/');
    }

    public function loginWithFacebook(Request $request)
    {
      $token = $request->input('token');
      $fb_user = Socialite::driver('facebook')->userFromToken($token);
      if($fb_user) {
        $user = User::updateOrCreate(
          ['email' => $fb_user->getEmail()], 
          [ 
            'pin' => random_str(6), 
            'avatarUrl' => $fb_user->getAvatar(), 
            'profileUrl' => 'https://www.facebook.com/' . $fb_user->getId()
          ]
        );
        Auth::login($user, true);
        return "success";
      } 
      return "fail";  
    }

}