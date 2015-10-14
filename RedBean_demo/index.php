<?php
require 'rb.php';
/* 设置连接属性 数据库类型 数据库名 用户名密码等 */
R::setup( 'mysql:host=localhost;dbname=dbname',
        'dbusername', 'dbpassword' );
/* native SQL query */
$book =  R::getAll( 'SELECT * FROM tbl_user' );
echo "<pre>";
print_r($book);

/* ORM save */
/* 注意这里不要使用前缀下划线命名的表 否则会抛出错误 如tbl_user  */
$usertb = R::dispense( "usertb" );
$usertb->name='aaas';
$usertb->age = 200;
R::store( $usertb );

/* ORM save */
/* 下面的方法可用于在下划线的表 */
define( 'PAGE', 'tbl_user' );
R::ext('xdispense', function( $type ){ 
        return R::getRedBean()->dispense( $type ); 
    });
$tbl_user = R::xdispense( PAGE );
$tbl_user->name='aaas';
$tbl_user->age = 200;
R::store( $tbl_user );