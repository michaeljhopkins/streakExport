<?php
namespace Sexport\StreakApi\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakFieldTrait
{
    function getFields($pipelineKey)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/fields');
        return $box->get();
    }

    function getField($pipelineKey, $fieldKey)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/fields/'.$fieldKey);
        return $box->get();
    }

    function createField($pipelineKey, $name, $type)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/fields');
        return $box->create(['name' => $name, 'type' => $type]);
    }

    function deleteField($pipelineKey, $fieldKey)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/fields/'.$fieldKey);
        return $box->delete();
    }

    function updateField($pipelineKey, $fieldKey, $data)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/fields/'.$fieldKey);
        return $box->update($data);
    }

    function getAllFieldsByBox($boxKey){
        $box = $this->curl('boxes/'.$boxKey.'/fields');
        return $box->get();
    }

    function getFieldByBox($boxKey, $fieldKey){
        $box = $this->curl('boxes/'.$boxKey.'/fields/'.$fieldKey);
        return $box->get();
    }

    function updateFieldByBox($boxKey, $fieldKey, $data){
        $box = $this->curl('boxes/'.$boxKey.'/fields/'.$fieldKey);
        return $box->update($data);
    }
}

