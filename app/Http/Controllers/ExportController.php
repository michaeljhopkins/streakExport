<?php

namespace Sexport\Http\Controllers;

use Sexport\Http\Requests;
use Streak\Streak;

/**
 * @property Client guzzle
 * @property Streak streak
 */
class ExportController extends Controller
{
	public function __construct()
    {
        \Auth::loginUsingId(1);
        $this->streak = new Streak(\Auth::user()->token);
    }
    
    public function index()
    {
        $boxes = $this->streak->boxes();
        dd($boxes->all());
    }
    
    public function boxList()
    {
        $streakBoxes = $this->streak->boxes();
        $boxes = [];
        foreach($streakBoxes->all() as $box){
            $boxes[$box['key']] = $box['name'];
        }
        $view['boxes'] = $boxes;
        return view('pages.export.boxList',$view);
    }
    
}
