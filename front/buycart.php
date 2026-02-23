<?php
// 存在與否
if(!isset($_SESSION['mem'])){
    header("location:?do=login");
    exit();
}