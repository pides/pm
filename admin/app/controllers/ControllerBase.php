<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    /*
     * setJson<br/>
     * $rs array<br/>
     * */
    function setJson($rs){
        $this->response->setJsonContent($rs);
    }
}
