<?php
/**
 *
 * @package     Streak
 * @version     1.0.1
 * @author      Frank Keulen
 * @license     MIT License
 * @copyright   2015 Frank Keulen
 * @link        http://github.com/xvize/streak
 */

namespace Sexport\StreakApi;

use Sexport\StreakApi\Traits\StreakBoxTrait;
use Sexport\StreakApi\Traits\StreakEmailFilterTrait;
use Sexport\StreakApi\Traits\StreakPipelineTrait;
use Sexport\StreakApi\Traits\StreakSearchTrait;
use Sexport\StreakApi\Traits\StreakStageTrait;
use Sexport\StreakApi\Traits\StreakFieldTrait;

use Sexport\StreakApi\Streak\StreakCurl;


/**
 * Streak
 *
 */
class Streak
{
    use StreakBoxTrait, StreakSearchTrait, StreakPipelineTrait,
        StreakEmailFilterTrait, StreakStageTrait, StreakFieldTrait;

    private $apikey;

    function __construct($apikey, $baseurl)
    {
        $this->apikey = $apikey;
        $this->baseurl = $baseurl;
    }

    private function getURL($urlSegment){
        return $this->baseurl.$urlSegment;
    }

    private function curl($urlSegment){
        return new StreakCurl($this->getUrl($urlSegment), $this->apikey);
    }

}
