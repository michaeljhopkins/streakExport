<?php
namespace Sexport\StreakApi\Traits;

/**
 * StreakFunctions
 *
 */
trait StreakPipelineTrait
{
    function createPipeline($name, $description = "")
    {
        $box = $this->curl('pipelines');
        return $box->create(['name' => $name, 'description' => $description]);
    }

    function getPipelineByKey($pipelineKey)
    {
        $box = $this->curl('pipelines'.'/'.$pipelineKey);
        return $box->get();
    }

    function deletePipelineByKey($pipelineKey){
        $box = $this->curl('pipelines'.'/'.$pipelineKey);
        return $box->delete();
    }

    function updatePipelineByKey($pipelineKey, $data = []){
        $box = $this->curl('pipelines'.'/'.$pipelineKey);
        return $box->update($data);
    }

    function getAllPipelines(){
        $box = $this->curl('pipelines');
        return $box->get();
    }

}




