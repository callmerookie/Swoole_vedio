<?php

namespace App\HttpController;

use EasySwoole\Core\Http\AbstractInterface\Controller;

/**
 * Class Index
 * @package App\HttpController
 */
class Index extends Controller
{
    /**
     * 首页方法
     * @author : evalor <master@evalor.cn>
     */
    function index()
    {
        $data   = [
          'id'  => '1',
          'name' => 'summer'
        ];
        $this->writeJson(200,'ok',$data);
    }
}