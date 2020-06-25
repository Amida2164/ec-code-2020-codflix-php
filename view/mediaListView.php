<?php ob_start(); ?>


<?php if (!empty($favorites) && (empty($search))): ?>
<h3>VOS MEDIAS A REGARDER: </h3>
    <div class="media-list" data="<?php $favorites ?>">
        <?php foreach( $favorites as $favory ): ?>
            <a class="item" href="index.php?media=<?= $favory['0']; ?>">
                <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                            src="http://www.youtube.com/embed/<?= $favory['trailer_url']; ?>" >
                        </iframe>
                    </div>
                </div>
                <div class="title"><?= $favory['title']; ?></div>
                <div class="title"><?= $favory['tname']; ?> : <?= $favory['gname']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>

<?php endif ?>


<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                    placeholder="Rechercher un film ou une série">

                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<?php if (empty($search)): ?>

    <h3>SERIES:</h3>
    <div class="media-list" data="<?php $series ?>">
        <?php foreach( $series as $serie ): ?>
            <a class="item" href="index.php?media=<?= $serie['0']; ?>">
                <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                            src="http://www.youtube.com/embed/<?= $serie['trailer_url']; ?>" >
                        </iframe>
                    </div>
                </div>
                <div class="title"><?= $serie['title']; ?></div>
                <div class="genre"><?= $serie['genre_name']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>

    <h3>FILMS:</h3>
    <div class="media-list" data="<?php $films ?>">
        <?php foreach( $films as $film ): ?>
            <a class="item" href="index.php?media=<?= $film['0']; ?>">
                <div class="video">
                    <div>
                        <iframe allowfullscreen="" frameborder="0"
                            src="http://www.youtube.com/embed/<?= $film['trailer_url']; ?>" >
                        </iframe>
                    </div>
                </div>
                <div class="title"><?= $film['title']; ?></div>
                <div class="genre"><?= $film['genre_name']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if(!empty($search)): ?>
<h2>Résultat de votre recherche: </h2>
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
<?php endif ?>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
