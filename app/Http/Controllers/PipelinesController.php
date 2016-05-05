<?php

namespace Sexport\Http\Controllers;

use Illuminate\Http\Request;

use Sexport\Http\Requests;
use Streak\Streak;

/**
 * @property Streak streak
 */
class PipelinesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->streak = new Streak($this->token);
    }

    public function index()
    {
        $view['pipelines'] = $this->streak->pipelines()->all();
        return view('pages.pipelines.index',$view);
    }
}
