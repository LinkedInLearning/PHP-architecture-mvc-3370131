<?php 

$title = "formulaire de modification";

ob_start();

?>


<form action="/mvc/AdminController/modifyArticlepage/<?php echo $article['article_id']; ?>" method="POST">
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre">
  </div>
  <div class="form-group">
    <label for="contenu">contenu</label>
    <textarea class="form-control" id="contenu" rows="3" name="contenu"></textarea>
  </div>
  <form>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control-file" id="image">
  </div>
  <div class="form-group">
    <input type="submit" name="submit">
  </div>
</form>

<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>
