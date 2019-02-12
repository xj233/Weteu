<?php 

header("Content-type:text/html;charset=utf-8");

include("./common/header.php");

?>
<p>
<form action="./doAdd.php" method="post">
  <div class="mdui-textfield mdui-textfield-floating-label">
    <label class="mdui-textfield-label">标题</label>
    <input class="mdui-textfield-input" type="text" name="title" required/></div>
  <div class="mdui-textfield mdui-textfield-floating-label">
    <label class="mdui-textfield-label">留言者：</label>
    <input class="mdui-textfield-input" type="text" name="author" required/></div>
  <div class="mdui-textfield mdui-textfield-floating-label">
    <label class="mdui-textfield-label">内容：</label>
    <textarea class="mdui-textfield-input OwOform" name="content" required></textarea>
  </div>
  <div class="OwO"></div>
  </div>
  <script src="../common/OwO.min.js"></script>
  <script>var OwO_demo = new OwO({
      logo: 'OωO表情',
      container: document.getElementsByClassName('OwO')[0],
      target: document.getElementsByClassName('OwOform')[0],
      api: '../common/OwO.json',
      position: 'down',
      width: '100%',
      maxHeight: '250px'
    });</script>
	<center>
  <input type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple" value="提交">
  <input type="reset" class="mdui-btn mdui-color-theme-accent mdui-ripple" value="重置"></td></center>
</form>
<h1>添加图片</h1>
<form action="uf.php" method="post" enctype="multipart/form-data">
  <label for="file">让吐槽能量更加强大!
    <br>(支持上传.png,.jpg,.jpeg,.gif等图片文件格式)</label>
  <input type="file" name="file" id="file">
  <p><center>
  <input type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple" name="submit" value="提交"></center><?php include("./common/footer.php"); ?>