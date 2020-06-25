<?php

require_once( 'model/user.php' );

/***************************
* ------ PROFIL PAGE -------
***************************/

function profilPage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  if($user_id){
    $user = User::getUserById($user_id);
    if(isset($_POST['Valider']) && !empty($_POST['email'])):
        User::updateUserEmail($_SESSION['user_id'], $_POST['email']);
        // Refresh user data
        $user = User::getUserById($user_id);
        require('view/userProfilView.php');
    endif;
    if($_GET['action'] == "changepass"):
        require('view/changePasswordView.php');
    endif;
    require('view/userProfilView.php');
  }
  else {
    require('view/homeView.php');
  }
}