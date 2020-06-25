<?php ob_start(); ?>

<div class="row">
    <div class="col-md-4">
        <h3><?= $media['title'] ?></h3>
    </div>
    <div class="col d-flex justify-content-end">
        <div class="row mr-2">
            <a href="/ec-code-2020-codflix-php" class="btn btn-dark">Retour</a>
        </div>
        
    </div>
</div>

<form method="post">
    <input type="submit" value="Mettre en favoris" name="favorite" id="addToFavBtn" class="btn btn-dark mr-2">
</form>

<div class="col mt-4">
    <div class="row mt-4">
        <span><?= $media['summary']?></span>
        <div class="col mt-2">
            <p class="row">Type : <?= $media['tname']?>, genre: <?= $media['gname']?></p>
            <p class="row">Status : <?= $media['status']?>, durée: <?= $media['duration']?> minutes</p>
            <p class="row">Sortie le: <?= $media['release_date']?></p>
        </div>
        <p></p>
    </div>
    <div class="row video mt-4 video_detail">
        <iframe width="100%" src="http://www.youtube.com/embed/<?= $media['trailer_url']; ?>?autoplay=1" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>