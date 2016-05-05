<?php
namespace Sexport\StreakApi\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakStageTrait
{
    function getStages($pipelineKey)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/stages');
        return $box->get();
    }

    function getStage($pipelineKey, $stageKey)
    {
        $box = $this->curl('pipelines/'.$pipelineKey.'/stages/'.$stageKey);
        return $box->get();
    }

    function createStage($pipelineKey, $name){
        $box = $this->curl('pipelines/'.$pipelineKey.'/stages');
        return $box->create(['name' => $name]);
    }

    function deleteStage($pipelineKey, $stageKey){
        $box = $this->curl('pipelines/'.$pipelineKey.'/stages/'.$stageKey);
        return $box->delete();
    }

    function updateStage($pipelineKey, $stageKey, $data){
        $box = $this->curl('pipelines/'.$pipelineKey.'/stages/'.$stageKey);
        return $box->update($data);
    }
}

