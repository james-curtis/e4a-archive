<?php
    header("Content-type: text/html; charset=gbk");
    $ljsql=@mysql_connect("地址","帐号","密码");//php改成你自己的就可以了。
    $db=@mysql_select_db("库名");//自己的库

$name=@$_GET['name'];
if($name==""){
    echo "1";//帐号为空返回1
    return;
}
$cxzh="SELECT * FROM `pre_ucenter_members` WHERE `email` = '".$name."'";
$cx=mysql_query($cxzh);
$du=mysql_fetch_array($cx);
if($du['email']==""){
   
    echo "3";//帐号不存在
    return;
}else{
    echo $du['salt'];
}
?>