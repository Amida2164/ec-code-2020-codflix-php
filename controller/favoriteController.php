<?php

/***************************
* ----- FAVORITE PAGE  -----
***************************/

function favoritePage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  require('view/favoriteListView.php');
}