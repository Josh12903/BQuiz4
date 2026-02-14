<h2>管理登入</h2>

<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="acc">
    </td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp">
            <input type="password" name="pw" id="pw">
    </td>
    </tr>
    <tr>
        <td class="tt ct">驗證碼</td>
        <td class="pp">
            <?php
                $a=rand(10,99);
                $b=rand(10,99);
                $_SESSION['ans']=$a+$b;
                echo $a . " + " . $b . " = ";
            ?>
            <input type="text" name="chknum" id="chknum">
    </td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="確認" onclick="login()">
</div>

<script>
    function login(){
        let ans=$("#chknum").val()
        $.get("api/chk_num.php",{ans},(res)=>{
            if(parseInt(res)){
                $.get("api/chk_admin_pw.php",{acc:$("#acc").val(),pw:$("#pw").val()},(chk)=>{
                    if(parseInt(chk)){
                        location.href='back.php'
                    }else{
                        alert("帳號或密碼錯誤")
                        location.reload();
                    }
                })
            }else{
                alert("驗證碼錯誤,請重填")
            }
        })
    }
</script>