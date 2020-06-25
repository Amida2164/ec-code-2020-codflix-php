<?php

require_once( 'model/media.php' );

/***************************
* ----- LOAD HOME PAGE -----
***************************/

function mediaPage()
{

  if (isset($_GET['media']) && !empty($_GET['media'])) {
    $search = isset($_GET['media']) ? $_GET['media'] : null;
    $medias = Media::getMediaDetails($search);
    require('view/mediaDetailView.php');
  } else {
    $search = isset($_GET['title']) ? $_GET['title'] : null;
    $medias = Media::filterMedias($search);
    require('view/mediaListView.php');
  }
}