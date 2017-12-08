<?php
require '/vendor/autoload.php';        
use Michelf\Markdown;
$my_html = Markdown::defaultTransform($news_item['text']);
echo "<h2 style='color: BlueViolet'>".$news_item['title'].'</h2>';
echo "<h5 style='color: Blue'>作者：".$news_item['author'].'</h5>';
echo $my_html;
?>

<br>



<?php
$con=mysqli_connect("localhost","root","123456","idcard");
$cid =$news_item["id"];//是你当前文章的编号
$sql ="select * from news where id<$cid order by id desc limit 0,1"; //上一篇文章
$sql1 ="select * from news where id>$cid order by id  limit 0,1";//下一篇文章
$result = mysqli_query($con,$sql);

$rs = mysqli_fetch_array( $result );
echo "上一篇：";
echo '<a href="'.site_url('news/'.$rs["slug"]).'">'.$rs["title"].'</a>';
 

echo "<br>";
/*
$result1 = mysqli_query($con,$sql1 );

$rs1 = mysqli_fetch_array( $result1 );
echo "下一篇：";
echo '<a href="'.site_url('news/'.$rs1[2]).'">'.$rs1[1].'</a>';
*/
?>



<?php
$cid =$news_item["id"];//是你当前文章的编号
$sql1 ="select * from news where id>$cid order by id  limit 0,1";
$query=$this->db->query($sql1);
$row=$query->row_array();
echo "下一篇：";
echo '<a href="'.site_url('news/'.$row["slug"]).'">'.$row["title"].'</a>';
?>