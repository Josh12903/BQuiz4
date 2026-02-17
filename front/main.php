<?php
$nav_str='';
if(isset($_GET['type']) && $_GET['type']!=0){
    $type=$Type->find($_GET['type']);
    if($type['big_id']==0){
        $nav_str=$type['name'];
    }else{
        $big=$Type->find($type['big_id']);
        $nav_str=$big['name'] . " > " . $type['name'];
    }
}else{
$nav_str="全部商品";
}
?>

<h2><?=$nav_str;?></h2>