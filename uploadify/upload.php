<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/13
 * Time: 13:52
 */
$arr=$_FILES['Filedata'];
$tepname=$arr['tmp_name'];
$name =$arr['name'];
$ext= explode(".",$name)[1];
$basename=md5(uniqid()).".$ext";
$baseDir=date('Y/m/d',time());
if(!is_dir($baseDir)){
    mkdir($baseDir,0,777);
}
$filePath=$baseDir.$basename;
move_uploaded_file($tepname,$filePath);
echo $filePath;



