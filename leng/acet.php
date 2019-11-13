<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/12
 * Time: 19:24
 */

$arr=$_FILES;
$data=$_REQUEST;
$tmpname=$arr['data']['tmp_name'];
$cont= file_get_contents($tmpname);
$filename=$data['filename'];
$baseDir='./'.date('y/m/d',time());
if(!is_dir($baseDir)){
    mkdir($baseDir,0,777);
}
$filepath=$baseDir.$filename;
file_put_contents($filepath,$cont,FILE_APPEND);
$filepath=ltrim($filepath,".");

$arrte=array(
    'error'=>0,
    "data"=>array(
        'path'=>$filepath
    )
);
echo json_encode($arrte);
