<?php

require_once( 'model/user.php' );

/***************************
* ------ PROFIL PAGE -------
***************************/

function changePassPage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  if($user_id){
    $user = User::getUserById($user_id);
    if(isset($_POST['Valider']) && !empty($_POST['password']) && !empty($_POST['new_password'] && !empty($_POST['confirm_password']))):
        $actual_pass = $_POST['password'];
        $new_pass = $_POST['new_password'];
        $confirm_pass = $_POST['confirm_password'];
        $hash = hash('sha256', $actual_pass);
        if($hash == $user['password'] && $new_pass == $confirm_pass):
            $new_hash_passs = hash('sha256', $new_pass);
            User::updateUserPassword($_SESSION['user_id'], $new_hash_passs);
            // Refresh user data
            $user = User::getUserById($user_id);
            require('view/userProfilView.php');
        else:
            $error_msg = "Rmeplissez correctement le formulaire";
        endif;
        require('view/userProfilView.php');
    endif;
    require('view/changePasswordView.php');
  }
  else {
    require('view/homeView.php');
  }
}