<?php

class userLogoutPageView {

  public function getHTML($errors='') {
    $logoutpage = '
      <div id="banner">
        <h1>Logged Out</h1>
      </div>';
    return $logoutpage;
  }
}


