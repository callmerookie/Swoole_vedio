<?php

namespace App\HttpController\Api;

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
            'name' => 'summer_li2018年11月8日20:46:13'
        ];
        return $this->writeJson(200,'ok',$data);
    }
    public function video()
    {
        $params = $this->request()->getRequestParam();
        $data = [
          'params' => $params
        ];
        return $this->writeJson(200,'nice',$data);
    }
}