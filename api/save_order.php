<?php include_once "db.php";

$_POST['acc']=$_SESSION['mem'];
$_POST['cart']=serialize($_SESSION['buycart']);
$_POST['order_date']=date("y-m-d");
$_POST['no']=date("ymd").rand(100000,999999);

$Order->save($_POST);
    unset($_SESSION['buycart']);
// to("../index.php");
?>
<script>
alert("訂購成功\n感謝您的選購");
location.href="../index.php"
</script>