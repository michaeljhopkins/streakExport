<?php
namespace Sexport\StreakApi\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakSearchTrait
{
    function search($query)
    {
        $box = $this->curl('search');
        return $box->get(['query' => $query]);
    }

}

