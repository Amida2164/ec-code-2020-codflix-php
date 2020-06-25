<?php ob_start(); ?>

<div class="col">
    <h3>Ecrivez à Cod'Flix</h3>

    <form method="post" action="index.php?action=contact" class="custom-form">

    <div class="form-group">
        <label for="email">Votre adresse email</label>
        <input type="email" name="email" value="" id="email" class="form-control" />
    </div>

    <div class="form-group">
        <label for="message">Votre message</label>
        <textarea name="message" id="message" class="form-control" rows="4"></textarea>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="submit" name="Valider" class="btn btn-block bg-success" />
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