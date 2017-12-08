<?php
foreach (array_reverse($news) as $news_item): ?>

    <h3 style="color: pink"><?php echo $news_item['title']; ?></h3>
    <div class="main">
        <?php
        if (mb_strlen($news_item['text'])>48)
        {
            $str=mb_substr($news_item['text'],0,48);
            echo $str."!@#$%^&*";
        }
        else
        {
            echo $news_item['text'];
        }
         ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
<br>
<h3 style="text-align:center"><?php echo $pageinfo;?></h3>
<br>