<?php

namespace Sexport\Http\Controllers;

use Sexport\Http\Requests;
use Illuminate\Http\Request;
use Streak\Streak;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $streak = new Streak(\Auth::user()->token);
        $view['pipelines'] = $streak->pipelines()->all();
        return view('pages.pipelines.index',$view);
    }

    public function profile()
    {
        $view['user'] = \Auth::user();
        
        return view('pages.profile',$view);
    }
    
    public function token()
    {
        $view['user'] = \Auth::user();

        return view('pages.getStreakToken',$view);
    }

    public function postToken(Request $request)
    {
        $token = $request->get('token');
        $user = \Sexport\User::find(\Auth::user()->id);
        $user->update(['token' => $token]);
        $user->save();
        \Auth::logout();
        \Auth::loginUsingId($user->id);
        if(!\Auth::guest()){
            return \Redirect::to('profile')->with('message', 'Updated Successfully');
        }
        else{
            return \Redirect::back()->withInput();
        }
    }
}
