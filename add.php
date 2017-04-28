<?php header("Content-type:text/html;charset=utf-8");?>
<?php include("./common/header.php"); ?>
<form action = "./doAdd.php" method = "post">
 <table  border = "0" cellpadding = "4">
      <tr><table>
             <td  align = "center">标题：</td>
             <td><input type = "text" class="form-control" name = "title" required></td>
     </tr>
      <tr>
             <td  align = "center">留言者：</td>
             <td><input type = "text" class="form-control" name = "author" required></td>
     </tr>
     <tr>
             <td align = "center" valign = "top">内容：</td>
             <td><textarea class="OwOform" rows="3" name = "content" required></textarea>
    <div class="OwO"></div>
    </div>
    <script src="../common/OwO.min.js"></script>
    <script>
        var OwO_demo = new OwO({
            logo: 'OωO表情',
            container: document.getElementsByClassName('OwO')[0],
            target: document.getElementsByClassName('OwOform')[0],
            api: '../common/OwO.json',
            position: 'down',
            width: '100%',
            maxHeight: '250px'
        });
    </script></td>
     </tr>
      <tr>            
	     <td colspan = "2" align = "center">
         <input type = "submit" class="btn btn-primary" value = "提交">
         <input type = "reset" class="btn btn-warning" value = "重置"></td>
     </tr></table>
</form>
<h1>添加图片</h1>
<form action="uf.php" method="post" enctype="multipart/form-data">
	<label for="file">让吐槽能量更加强大!<br>(支持上传.png,.jpg,.jpeg,.gif等图片文件格式)</label>
	<input type="file" name="file" id="file"><br>
	<input type="submit" class="btn btn-primary" name="submit" value="提交">
</center>

<?php include("./common/footer.php"); ?>