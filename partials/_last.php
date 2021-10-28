<div class="widget margin-top-40">

  <h3>Les plus populaires</h3>
  <ul class="widget-tabs">

    <!-- Post #1 -->
    <?php
    $sql = "SELECT * from blog b join users u on b.id=u.id WHERE b.id_blog='$id_blog' ORDER BY b.id_blog DESC  LIMIT 0,3";
    $query = $db -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $result)
    {  ?>
    <li>
      <div class="widget-content">
          <div class="widget-thumb">
          <a href="blog_over.php?id_blog=<?php echo $result->id_blog; ?>"><img src="admin_section/img/blog/<?php echo $result->Vimage1; ?>" width="150" height="150" alt="image de l'article"></a>
        </div>

        <div class="widget-text">
          <h5><a href="blog_over.php?id_blog=<?php echo $result->id_blog; ?>"><?php echo $result->titre; ?></a></h5>
          <span class=" date timeago" title="<?php echo $result->created_at; ?>"><?php echo $result->created_at; ?>
        </div>
        <div class="clearfix"></div>
      </div>
    </li>
    <?php }} ?>
  </ul>

</div>
