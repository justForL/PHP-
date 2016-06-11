<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/23
 * Time: 下午9:03
 */
//获取时间戳
//echo time();

//设置时区
date_default_timezone_set("Asia/Shanghai");
//获取年月日
echo date('Y-m-d H:i:s',time());