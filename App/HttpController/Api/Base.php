<?php
/**
 * Created by PhpStorm.
 * User: catherine
 * Date: 2018/11/9
 * Time: 16:27
 */
namespace App\HttpController\Api;
use EasySwoole\Core\Http\AbstractInterface\Controller;

class Base extends Controller{
    /**
     *
     */
        public function index()
        {
            // TODO: Implement index() method.
        }

    /**
     * @param $action
     * @return bool|null
     */
        public function onRequest($action): ?bool
        {
            return true;
        }

    /**throw
     * @param \Throwable $throwable
     * @param $actionName
     */
        public function onException(\Throwable $throwable, $actionName): void
        {
                $this->writeJson(400,'请求不合法');
        }
}