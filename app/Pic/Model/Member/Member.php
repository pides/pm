<?php
/**
 * Created by PhpStorm.
 * User: Pides
 * Date: 16/1/10
 * Time: 下午8:27
 */
namespace Pic\Model\Member;
class Member extends \Pic\Model\BaseModel{
    public function getSource()
    {
        return TABLE_PREFIX . "member";
    }
}
