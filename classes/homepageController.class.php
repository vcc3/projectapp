<?php

    class homepageController extends controller {

      public function get() {
        $user = new userModel;
        $userpage = new userHomepageView;
        $homepageHTML = $userpage ->getHTML();
        $this->html .= $homepageHTML;
      }
      public function post() {}
      public function put() {}
      public function delete() {}

    }
