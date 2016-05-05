<?php
namespace Sexport\StreakApi\Streak;

use Exception;
use Jyggen\Curl\Curl;
use Jyggen\Curl\Request;

/**
 * StreakCurl
 *
 */
class StreakCurl
{
    private $request;

    public function __construct($url, $key){
        $this->request = new Request($url);
        $this->request->setOption(CURLOPT_USERPWD, $key);
    }

    public function update($data)
    {
        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'POST');
        $this->request->setOption(CURLOPT_POSTFIELDS, $data);

        return $this->executeRequest();
    }


    public function create($data){

        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'PUT');
        $this->request->setOption(CURLOPT_POSTFIELDS, http_build_query($data));

        return $this->executeRequest();
    }

    public function get($data = []){

        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'GET');
        $this->request->setOption(CURLOPT_POSTFIELDS, http_build_query($data));

        return $this->executeRequest();
    }

    public function delete(){

        $this->request->setOption(CURLOPT_CUSTOMREQUEST, 'DELETE');
        return $this->executeRequest();
    }

    private function executeRequest(){

        $this->request->execute();

        if($this->request->isSuccessful()){
            return json_decode($this->request->getResponse()->getContent());
        }

        return new Exception($this->request->getErrorMessage());
    }

}