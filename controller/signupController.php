<?php

require_once( 'model/user.php' );

/****************************
* ----- LOAD SIGNUP PAGE -----
****************************/

function signupPage() {

  $user     = new stdClass();
  $user->id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( !$user->id ):
    require('view/auth/signupView.php');
  else:
    require('view/homeView.php');
  endif;

}

/***************************
* ----- SIGNUP FUNCTION -----
***************************/

function signup($post)
{
  if (isset($_POST['submit'])) :
    $data           = new stdClass();
    $data->email    = $post['email'];
    $password = $post['password'];
    $password_confirm = $post['password_confirm'];
    $user           = new User($data);
    $userMail       = $user->getUserByEmail($data->email);

    echo $data->password . $data->password_confirm;
    if ($password == $password_confirm) :
      if ($user->getEmail() != $userMail['email']) :
        $user->createUser();
        $_SESSION['user_id'] = $userMail['id'];
        header('location: index.php ');
      else :
        echo '<script type="text/javascript">alert("Cette adresse mail existe déjà");</script>';
      endif;
    else :
      echo '<script type="text/javascript">alert("Votre mot de passe et la confirmation ne sont pas identique");</script>';
    endif;
  else :
    echo '<script type="text/javascript">alert("Echec de la création de votre compte");</script>';
  endif;

  require('view/auth/signupView.php');
}