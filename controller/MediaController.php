<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage()
{

  if (isset($_GET['media']) && !empty($_GET['media'])) {
    $search = isset($_GET['media']) ? $_GET['media'] : null;
    $media = Media::getOneMedia($_GET['media']);
    if(isset($_POST['favorite'])):
      try {
        Media::favoriteMedia($_SESSION['user_id'], $_GET['media']);
        require('view/mediaDetailView.php');
      } catch(Exception $e) {
        $error_msg = "Le média est déjà dans votre liste de favoris";
        require('view/mediaDetailView.php');
      }
    else:
      require('view/mediaDetailView.php');
    endif;
  } else {
    $search = isset($_GET['title']) ? $_GET['title'] : null;
    $medias = Media::filterMedias($search);
    $films  = Media::getFilmMedias();
    $series = Media::getSerieMedias();
    require('view/mediaListView.php');
  } 
}    