<!Doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>吐槽集能器</title>
  <meta name="description" content="留言板，本应简洁如此" />
  <meta name="keywords" content="风栖,矢量实验室,吐槽集能器,留言板,表白墙,萌到爆的叉鸡君" />
  <meta itemprop="name" content="吐槽集能器">
  <meta itemprop="image" content="https://www.ioig.net/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="./common/style.css">
  <link rel="stylesheet" href="./common/OwO.min.css">
  <link rel="stylesheet" href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css">
  <link rel="shortcut icon" href="./favicon.ico" /></head>
<body class="bg mdui-theme-primary-indigo mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-accent-pink">
  <div class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-indigo">
      <a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#drawer'}">
        <i class="mdui-icon material-icons">&#xe5d2;</i></a>
      <span class="mdui-typo-title">吐槽集能器</span>
      <div class="mdui-toolbar-spacer"></div>
    </div>
  </div>
  </div>

  <div class="mdui-drawer" id="drawer">
        <div class="mdui-container">
      <ul class="mdui-list" mdui-collapse="{accordion: true}" style="max-width: 360px;">
        <a href="./index.php">
          <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">&#xe88a;</i>
            <div class="mdui-list-item-content">首页</div></li>
        </a>
        <a href="./add.php">
          <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">&#xe871;</i>
            <div class="mdui-list-item-content">立即吐槽</div></li>
        </a>
    </div>
  </div>
  <div class="mdui-container doc-container doc-no-cover">

  <div class="mdui-divider"></div>
<?php
date_default_timezone_set("PRC");
?>
