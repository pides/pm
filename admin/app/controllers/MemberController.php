<?php

class MemberController extends ControllerBase
{

    public function indexAction()
    {
        $member = new \Suc\Model\Member\Member();
    }
    public function editAction(){
        echo "edit";
        exit;
    }
}

