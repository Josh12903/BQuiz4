<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="big"><button onclick="saveType('big')">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="bigs" id="bigs"></select>
    <input type="text" name="mid" id="mid"><button onclick="saveType('mid')">新增</button>
</div>
<h2 class="ct">商品管理</h2>
<script>
    getBigs()
    function saveType(type){
        let name='';
        let big_id=0;
        switch(type){
            case 'big':
                name=$('#big').val();
                break;
            case 'mid':
                name=$('#mid').val();
                big_id=$('#bigs').val();
            break;
        }
        console.log("準備傳送：", {name, big_id});
        $.post("api/save_type.php",{name,big_id},()=>{
            console.log("伺服器回傳：", res);
            location.reload()
        })
    }
function getBigs(){
    $.get('api/get_bigs.php',(bigs)=>{
        $("#bigs").html(bigs)
    })
}
</script>