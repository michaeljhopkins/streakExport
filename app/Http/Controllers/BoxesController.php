<?php

namespace Sexport\Http\Controllers;

use Illuminate\Support\Collection;
use Streak;

/**
 * @property Streak streak
 */
class BoxesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $boxesRaw = new Collection(Streak::getAllPipelineBoxes($id));
        $boxes = [];
        foreach($boxesRaw as $box){
            $boxes[$box->key] = $box->name;
        }
        $view['boxes'] = $boxes;
        #$boxes = \Streak::getAllPipelineBoxes($id);
        return view('pages.boxes.index',$view);
    }

    public function postBoxList()
    {
        $boxIdsToExport = \Request::get('boxes');
        $boxes = new Collection();
        $threadArray = [];
        foreach($boxIdsToExport as $id){
            $box = \Streak::getBoxByKey($id);
            $box->threads = $this->getThreadsOfBox($id);
            foreach($box->threads as $thread){
                $threadArray[$id][] = $thread->gmailThreadKey;
            }
            $boxes->push($box);
        }
        $view['boxDetails'] = $boxes;
        $view['threadArray'] = $threadArray;
        return view('pages.boxes.tempPdfPlaceholder',$view);

    }

    private function getThreadsOfBox($id)
    {
        return \Streak::getAllBoxThreads($id);
    }
}
