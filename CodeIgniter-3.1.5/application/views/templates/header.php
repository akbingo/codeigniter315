<html>
<head>
<title><?php echo $title; ?></title>
<link rel="stylesheet" href="/static/style/container.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.1/css/bootstrap.min.css">
<style>
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}

li
{
display:inline;
}
</style>

<script type="text/javascript">  
    window.onload=function(){  
        document.getElementById("right").style.height = document.getElementById("left").offsetHeight+"px";  
    } 
</script> 

</head>
<body>
    <div id="container">
        <div id="header"><h3 style="color:green"><?php echo $title; ?></h1>
        <nav>
            <ul>
            <li><a href="/">老黎のEBIMASU</a></li>
            <li><a href="/">Blog</a></li>
            <li><a href="https://github.com/lixiaomingshao">Code</a></li>
            <li><a href="http://photo.weibo.com/2210902324/albums">Photo</a></li>
            <li><a href="http://www.jianshu.com/u/ef836a84b301">Script</a></li>
            <li><a href="http://t.qidian.com/AuthorIndex.php?id=1781312">Story</a></li>
            <li><a href="http://i.youku.com/i/UMzU3NjAxMDU2">Video</a></li>

            <li style="float:right">
            <?php
            if ($this->session->userdata("s_id"))
            {
                echo $this->session->username."&nbsp;";
                echo "<a href='http://localhost:48/signin/logout'>退出</a>";
            }
            else
            {
                echo "<a href='http://localhost:48/signin/index'>登录</a>";
            }
            ?>
            </li>
            </ul>
        </nav>
        </div>

        
            <div id="left" class="content">
