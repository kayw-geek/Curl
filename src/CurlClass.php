<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/13
 * Time: 15:17
 */

namespace Weikaiii\Curl;

use Illuminate\Support\Facades\Facade;
class CurlClass extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Curl';
    }

}