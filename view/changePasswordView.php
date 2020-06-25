<?php ob_start(); ?>

<div class="col">
    <h3>Votre profil</h3>

    <form method="post" action="index.php?action=profil" class="custom-form">

    <div class="form-group">
        <label for="email">Formulaire de modification de mot de passe</label>
    </div>

    <div class="form-group">
        <input type="password" placeholder="Mot de passe actuel" value="" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="password" placeholder="Nouveau mot de passe" value="" name="new_password" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="password" placeholder="Confirmez le nouveau mot de passe" value="" name="confirm_password" class="form-control"/>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="submit" value="Modifier" name="Valider" class="btn btn-block bg-success" />
            </div>
            <div class="col">
                <a href="index.php?action=profil" class="btn btn-block bg-primary">Retour</a>
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