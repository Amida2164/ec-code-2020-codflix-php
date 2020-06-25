<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/favoriteController.php');
require_once( 'controller/historyController.php');
require_once( 'controller/userProfilController.php');
require_once( 'controller/contactController.php');


/**************************
* ----- HANDLE ACTION -----
***************************/

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

      signupPage();

    break;

    case 'logout':

      logout();

    break;

    case 'favorite':

      favoritePage();

    break;

    case 'history':

      historyPage();

    break;

    case 'contact':

      if(!empty($_POST)):
        contactPage($_POST);
      else:
        require('view/contactView.php');
      endif;

    break;

    case 'profil':

      profilPage();

    break;

  endswitch;

else:

  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

  if( $user_id ):
    mediaPage();
  else:
    homePage();
  endif;

endif;
