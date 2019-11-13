<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/11
 * Time: 20:05
 */


if(empty($_COOKIE['uid'])){
    echo "未登录";
}else{
    echo '登录成功';
}