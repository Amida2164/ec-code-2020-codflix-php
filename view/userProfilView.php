<?php ob_start(); ?>

<div class="col">
    <h3>Votre profil</h3>

    <form method="post" action="index.php?action=profil" class="custom-form">

    <div class="form-group">
        <label for="email">Votre adresse email: <?= $user['email'] ?></label>
        <input type="email" name="email" value="" placeholder="Entrez un nouvel email pour le remplacer" id="email" class="form-control" />
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="submit" value="Modifier" name="Valider" class="btn btn-block bg-success" />
            </div>
            <div class="col">
                <a href="index.php?action=changepass" class="btn btn-block bg-primary">Modifier le mot de passe</a>
            </div>
        </div>
    </div>

    <span class="error-msg">
        <?= isset( $error_msg ) ? $error_msg : null; ?>
    </span>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>