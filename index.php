<?php header("Content-type:text/html;charset=utf-8");?>
<?php include("common/header.php"); ?>
<center>
	<div class="alert alert-warning">
	<a class="close" data-dismiss="alert">
	&times;
	</a>
	<strong>公告</strong>   欢迎使用吐槽集能器
</div>

</center>
<center>
<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th>微题</th>
			<th>V名</th>
			<th>微内容</th>
			<th>时间</th>
		</tr>
	</thead>
<?php
  // 获取留言信息，解析后输出到表格中
// 1.从留言liuyan.txt中获取留言信息
  $info = file_get_contents("liuyan.txt");
  // 2.去除留言内容最后的三个@@@符号
  $info = rtrim($info,"@");
  if(strlen($info)>=8){
  // 3.以@@@符号拆分留言信息为一条一条的（将留言信息以@@@符号拆分成留言数组）
  $lylist = explode("@@@",$info);
   
  // 4.遍历留言信息数组，对每条留言做再次解析；
  foreach($lylist as $k=>$v){
   $ly = explode("##",$v);
   echo "<tr>";
   echo "<td>{$ly[0]}</td>";
   echo "<td>{$ly[1]}</td>";
   echo "<td>";
   var_dump(filter_var($ly[2], FILTER_SANITIZE_STRING));
   echo "</td>";
   echo "<td>".date("Y-m-d",$ly[3])."</td>";
 
  }
  }
   
?>
</table>
</div>
</center>
<center>
<div>
<?php
$imglist=''; 
//用$img_folder变量保存图片所在目录，必须用“/”结尾 
$img_folder = "upload/"; 
mt_srand((double)microtime()*1000); 
//使用目录类 
$imgs = dir($img_folder); 
//检查目录下是否有图片，并生成一个清单 
while ($file = $imgs->read()) { 
if(preg_match('/\.[a-zA-Z0-9]+/',$file))
$imglist .= "$file "; 
} closedir($imgs->handle); 
//把清单里的项都放到一个数组里 
$imglist = explode(" ", $imglist); 
$no = sizeof($imglist)-2; 
//生成一个介于0和图片数量之间的随机数 
$random = mt_rand(0, $no); 
$image = $imglist[$random]; 
//输出结果 
echo '<img src="'.$img_folder.$image.'" class="img-responsive" alt="Weteu IMG">'; 
?>
</div>
</center>
</body>


<?php include("common/footer.php"); ?>