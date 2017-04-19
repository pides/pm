<?php

class UserController extends ControllerBase
{

    public function avatarAction(){
        header("Content-Type:image/jpeg");
        echo file_get_contents(__DIR__ . '/../../public/img/photo.jpg');
    }
}

