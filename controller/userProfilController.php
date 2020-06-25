<?php

require_once( 'model/user.php' );

/***************************
* ------ PROFIL PAGE -------
***************************/

function profilPage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  if($user_id){
    $user = User::getUserById($user_id);
    require('view/userProfilView.php');
  }
  else {
    require('view/homeView.php');
  }
}