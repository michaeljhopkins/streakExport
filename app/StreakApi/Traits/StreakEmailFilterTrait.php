<?php
namespace Sexport\StreakApi\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakEmailFilterTrait
{
    function getEmailFilters($boxKey)
    {
        $box = $this->curl('boxes/'.$boxKey.'/emailfilters');
        return $box->get();
    }


    function addEmailFilter($boxKey, $filterType = 'EMAIL_ADDRESS_FILTER', $email)
    {
        $box = $this->curl('emailfilters');
        return $box->update(['boxKey' => $boxKey, 'type' => $filterType, 'value' => $email]);

    }

}