<?php

    class homepageController extends controller {

      public function get() {
        $user = new userModel;
        $userhpage = new userHomepageView;
        $homepageHTML = $userhpage ->getHTML();
        $this->html .= $homepageHTML;
      }
      public function post() {}
      public function put() {}
      public function delete() {}

    }
