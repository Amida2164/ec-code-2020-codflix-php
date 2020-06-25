<?php

/***************************
* ----- HISTORY PAGE -------
***************************/

function historyPage() {
  $user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;
  require('view/historyView.php');
}