<?php header("Content-type:text/html;charset=utf-8");?>
<?php include("./common/header.php"); ?>
<center>
<h3>添加留言</h3>
<?php
    //执行留言信息添加操作
//1.获取要添加的留言信息
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$addtime = time();

//2.拼装留言信息
$ly = "{$title}##{$author}##{$content}##{$addtime}@@@";
//echo $ly;
//3. 将留言添加到liuyan.txt文件中
$info = file_get_contents("liuyan.txt");
file_put_contents("liuyan.txt",$info.$ly);
echo "</br>";
//file_put_contents("liuyan.txt",$ly); 直接输出会覆盖上一条留言！
//4.输出留言成功！
echo "留言成功！";

 ?>
     <a href='index.php' class="mdui-btn mdui-color-theme-accent mdui-ripple">返回留言列表页</a>
</center>


<?php include("./common/footer.php"); ?>