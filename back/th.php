<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="big">
    <button onclick="addBig()">新增</button>
</div>
<div class="ct">
    新增中分類
    <select name="b" id="b">

    </select>
    <input type="text" name="mid" id="mid">
    <button>新增</button>
</div>
<table class="all">
<?php
$bigs=$Type->all(['parent'=>0]);
foreach($bigs as $big){
?>
<tr class="tt">
    <td><?=$big['name'];?></td>
    <td class="ct">
        <button data-id="<?=$big['id'];?>">修改</button>
        <button onclick="del('Type',<?=$big['id'];?>)">刪除</button>
    </td>
</tr>
<?php
}
?>
<tr class="pp ct">
    <td>dsfaf</td>
    <td>
        <button>修改</button>
        <button>刪除</button>
    </td>
</tr>

</table>
<script>
function addBig(){
    $.post("./api/add_big.php",{name:$("#big").val()},()=>{
        location.reload()
    })
}

</script>















<h2 class="ct">商品管理</h2>