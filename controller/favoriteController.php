<?php

/***************************
* ----- FAVORITE PAGE  -----
***************************/

function favoritePage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  $medias = Media::getFavoriteMediaS($user_id);
  require('view/favoriteListView.php');
}