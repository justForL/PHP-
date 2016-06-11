<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/24
 * Time: 下午9:09
 */
if($_POST['a'] && $_POST['b']) {
    echo $_POST['a'] + $_POST['b'];
}else {
    echo '请输入参数';
}