<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class ActivationController extends Controller
{
    public function index(Request $request)
    {
      // dd($request);
      $user  = User::where('email',$request->email)->where('activation_token',$request->token)->firstOrFail();
      $user->update([
        'activated'=>true,
        'activation_token'=>null,
      ]);
      Auth::loginUsingId($user->id);
      return redirect()->route('home')->withSuccess('Activated! You\'re now signed in. ');
    }
}
