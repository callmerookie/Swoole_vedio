<?php
/**
 * Created by PhpStorm.
 * User: catherine
 * Date: 2018/11/9
 * Time: 15:48
 */
namespace App\Lib\Redis;
use EasySwoole\Core\AbstractInterface\Singleton;
class Redis{
    use Singleton;

    public $redis = "";

    private function __construct()
    {
        if (!extension_loaded('redis')){
            throw new \Exception("redis模块未加载");
        }
        try{
            $this->redis = new \Redis();
            $resule = $this->redis->connect('127.0.0.1',6379,5);
        }catch (\Exception $e){
            throw new \Exception("redis服务异常");
//            throw new \Exception($e->getMessage());
        }

        if ($resule === false){
            throw new \Exception("redis连接失败");
        }
    }

    public function get($value){
        if (empty($value))
        {
            return '';
        }
        return $this->redis->get($value);
    }
    /**
     * 根据传递参数魔术对应方法
     * @param $name
     * @param $arguments
     * @return string
     */
    public function __call($name, $arguments) {
        if(count($arguments) != 2) {
            return '';
        }
        $this->redis->$name($arguments[0], $arguments[1]);
    }

}