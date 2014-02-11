


<?php foreach ($news as $news_item): ?>



    <h2> <a href="<?php  echo $news_item['slug'] ?>"> <?php echo $news_item['title'] ?> </a> </h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>