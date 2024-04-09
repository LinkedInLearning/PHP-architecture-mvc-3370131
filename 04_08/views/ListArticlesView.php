<?php

$title = "liste des articles";

ob_start();

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">titre</th>
      <th scope="col">contenu</th>
      <th scope="col">date</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($articles as $article) { ?>
    <tr>
      <th scope="row"><?php echo $article['article_id']; ?></th>
      <td><?php echo $article['titre'];  ?></td>
      <td><?php echo $article['contenu'];  ?></td>
      <td><?php echo $article['date'];  ?></td>
      <td><a href="" class="btn btn-warning">modifier</a><a href="" class="btn btn-danger">supprimer</td>
    </tr>
 <?php } ?>   
  </tbody>
</table>

<a href="" class="btn btn-primary"> Créer un article</a>

<?php 
$content = ob_get_clean();

require_once 'layout.php';
?>
