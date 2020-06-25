<?php

require_once( 'model/user.php' );
require_once( 'loginController.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    // If user submit the signup form
    if(isset($_POST['Valider']) && $_POST['Valider'] == 'Valider'){
      signup();
    }
    else {
      require('view/auth/signupView.php');
    }
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

/**
 * This function register the user in our database
 */
function signup() {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];
  $formIsGood = true;
  if(empty($email)){
    $formIsGood = false;
    $error_msg = "Saisissez un email valide";
  }
  if(empty($password)){
    $formIsGood = false;
    $error_msg = "Saisissez un mot de passe";
  }
  if(empty($password_confirm)){
    $formIsGood = false;
    $error_msg = "Confirmez le mot de passe";
  }
  if($password != $password_confirm) {
    $formIsGood = false;
    $error_msg = "Les mots de passe ne sont pas identiques";
  }
  if($formIsGood == true) {
    $hash = hash('sha256', $password);
    $user = new User();
    $user->setEmail($email);
    $user->setPassword($hash);
    $user->createUser();

    // Redirect user to login page
    loginPage();
  }
  else {
    $error_msg = "Remplissez le formulaire";
  }
}

