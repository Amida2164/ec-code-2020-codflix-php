<?php ob_start(); ?>

<h3>FAVORIS: </h3>
<div class="media-list">
    <?php foreach( $medias as $media ): ?>
        <a class="item" href="index.php?media=<?= $media['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                        src="http://www.youtube.com/embed/<?= $media['trailer_url']; ?>" >
                    </iframe>
                </div>
            </div>
            <div class="title"><?= $media['title']; ?></div>
            <div class="title"><?= $media['tname']; ?> : <?= $media['gname']; ?></div>
        </a>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
