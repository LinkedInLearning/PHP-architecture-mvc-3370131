<?php
$title = "home";

ob_start();

?>

<div class="container">
    <div class="row">
<?php foreach($articles as $article) { ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $article['titre']; ?></h5>
                <p class="card-text"><?php echo $article['contenu']; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo $article['date']; ?></small></p>
            </div>
            <img src="https://placehold.co/250x250" class="card-img-bottom" alt="...">
        </div>
    </div>
<?php } ?>    
</div>


<?php 
$content = ob_get_clean();
require 'layout.php';
?>