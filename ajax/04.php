<?php
$id=$_POST['id'];
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'project'
);
$dao=DAOPDO::getSingleton($configs);
$sql="delete from blog where id=$id";
$res=$dao->query($sql);
if($res==true){
    $arr=array(
        'code'=>0,//0代表成功
        'msg'=>'删除成功'
    );
    echo json_encode($arr);//把数组转换成json格式的字符串
}else{
    $arr=array(
        'code'=>1,//1代表失败
        'msg'=>'删除失败'
    );
    echo json_encode($arr);
}



