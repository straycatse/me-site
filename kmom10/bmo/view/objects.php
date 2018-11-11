<div class="wrap-main">
    <main>
    <?php
    $db = connectToDatabase($dsn2);

    // Prepare and execute the SQL statement
    $stmt = $db->prepare("SELECT * FROM Object");
    $stmt->execute();

    $objects = getPublishedObjects($db);
    ?>

<?php foreach ($objects as $object) : ?>
<article>
  <div class="objectListing">
    <a href="single_object.php?id=<?php echo $object['id']; ?>">
      <img src="<?php echo 'img/250x250/' . $object['image']; ?>" class="post_image" alt="">
      <div class="object_info">
        <p><?php echo $object['title'] ?></p>
        <div class="info">
          <span class="read_more">Läs mer</span>
        </div>
      </div>
    </a>
  </div>
</article>
<?php endforeach ?>
</main>
</div>
