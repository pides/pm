<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $list = [
            [
                "cls" => 'active',
                'ico' => 'pic-user',
                'title' => '用户中心',
                "list"=> [
                    [

                        'title' => '新增用户',
                        'url' => 'member/edit/1'
                    ],[

                        'title' => '新增用户',
                        'url' => 'member/edit/2'
                    ],[

                        'title' => '新增用户',
                        'url' => 'member/edit/3'
                    ],[

                        'title' => '新增用户',
                        'url' => 'member/edit/4'
                    ],[

                        'title' => '新增用户',
                        'url' => 'member/edit/5'
                    ]
                ]
            ],[

                'ico' => 'pic-legal',
                'title' => '订单中心',
                "list"=> [
                    [

                        'title' => '全部订单',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ]
                ]
            ],[
                'ico' => 'pic-file-alt',
                'title' => '文件管理',
                "list"=> [
                    [
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ],[
                        'title' => '新增用户',
                        'url' => 'member/edit'
                    ]
                ]
            ]
        ];

//       $list = [
//            [
//                "id" => 1,
//                "cls" => 'active',
//                'ico' => 'pic-user',
//                'title' => '用户中心',
//                "list"=> [
//                    [
//                        "id" => 101,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 102,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 103,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 104,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 105,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ]
//                ]
//            ],[
//                "id" => 2,
//                'ico' => 'pic-legal',
//                'title' => '订单中心',
//                "list"=> [
//                    [
//                        "id" => 201,
//                        'title' => '全部订单',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 202,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 203,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 204,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 205,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 206,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ]
//                ]
//            ],[
//                "id" => 3,
//                'ico' => 'pic-file-alt',
//                'title' => '文件管理',
//                "list"=> [
//                    [
//                        "id" => 301,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 302,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 303,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 304,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ],[
//                        "id" => 305,
//                        'title' => '新增用户',
//                        'url' => 'member/edit'
//                    ]
//                ]
//            ]
//        ];
        $this->view->setVar("nav",json_encode($list,true));
    }
    public function desktopAction()
    {
        echo "test";
        exit;
    }
}

