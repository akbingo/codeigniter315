<?php
echo strlen('最近在Windows下敲PHP代码，需要安装数据库MySQL。在官网下载，Windows下有msi和zip两个安装包，尝试用msi安装，被安装界面那一连串的英文配置页面吓到了');
echo "<br>";
echo mb_strlen('最近在Windows下敲PHP代码，需要安装数据库MySQL。在官网下载，Windows下有msi和zip两个安装包，尝试用msi安装，被安装界面那一连串的英文配置页面吓到了');
echo "<br>";
echo strlen('Ubuntu版本为16.04 安装命令 更改默认目录 将 <Directory /var/www/> 改成 <Directory "你的目录">，可以将/var/www 中的');
echo '<br>';
echo mb_strlen('Ubuntu版本为16.04 安装命令 更改默认目录 将 <Directory /var/www/> 改成 <Directory "你的目录">，可以将/var/www 中的');
echo "<br>";
echo site_url();

?>

<br>
<a href="http://localhost:48/about">about</a>
<br>
<a href="http://localhost:48/news">news</a>
<br> 