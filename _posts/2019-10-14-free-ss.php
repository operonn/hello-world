<?php
  // 爬虫核心功能：获取网页源码
  $html = file_get_contents("https://free-ss.co/");
  // 通过 php 的 file_get_contents 函数获取百度首页源码，并传给 $html 变量
  echo $html;
  // 输出 $html
?>