<?php

    class userController extends controller {

      public function get() {
        
	
	if(isset($_GET['action'])){
          $get = $_GET;
          $action = $_GET['action'];
        
	
	  if($action=="profile"){
                $user = new userModel;
                if($user->isLoggedIn()){
                  $profile = new userProfileView;
                  $profileHTML = $profile->getHTML();
                  $this->html .= $profileHTML;
                } else {
                  $error = 'You are not logged in.';
                  header('Location: index.php?controller=userController&errors='.$error);
                }
            }

            elseif($action=="edit"){
              $user = new userModel;
              if($user->isLoggedIn()){
                $profile = new userProfileView;
                $profileHTML = $profile->getHTML(true);
                $this->html .= $profileHTML;
              } else {
                $error = 'PLEASE LOGIN !';
              }

            }


            elseif($action=="usertable"){
              $table = new userTableView;
              $tableHTML = $table->getHTML();
              $this->html .= $tableHTML;
            }
            
            elseif($action=="java"){
              $javaPage = new getJava;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }
            elseif($action=="php"){
              $javaPage = new getPHP;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }
            elseif($action=="javascript"){
              $javaPage = new getJavaScript;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }
            elseif($action=="c"){
              $javaPage = new getC;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }
            elseif($action=="python"){
              $javaPage = new getPython;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }
            elseif($action=="webdev"){
              $javaPage = new getWebDev;
              $pageHTML = $javaPage->getHTML();
              $this->html .= $pageHTML;            
            }

            
            elseif($action=="logout"){
            
	      $user = new userModel;    
        $user ->logout();         
	      $logoutpage = new userLogoutPageView;
	      $logoutHTML = $logoutpage->getHTML();
	      $this->html .= $logoutHTML;
	    
	    }

        
            elseif($action=="joined"){
              $form = new userLoginPageView;
              $form_html = $form->getHTML();
              $this->html .= $form_html;
            }
      }


         elseif(isset($_GET['errors'])) {
            
	    if($_GET['form'] == 'edit') {
              $formtype = $_GET['form'];
              $errors = $_GET['errors'];
              $profile = new userProfileView;
              $profileHTML = $profile->getHTML(true,$errors);
              $this->html .= $profileHTML;
            } else {
              $formtype = $_GET['form'];
              $errors = $_GET['errors'];
              $form = new userLoginPageView;
              $form_html = $form->getHTML($errors, $formtype);
              $this->html .= $form_html;
            }
          
	} 

       
        else{

            $form = new userLoginPageView;
            $form_html = $form->getHTML();
            $this->html .= $form_html;
          }
        }


    public function post() {
    
 
        //LOGIN
      if(!isset($error)){
        try {
	  
	  if(isset($_POST['username']) && isset($_POST['password'])){
	      $user = new userModel;
	  
	      if($user->login($_POST['username'],	$_POST['password'])){
	          header('Location:index.php?controller=userController&action=profile');				
	          exit;
	      }else{
	          $error[]='Wrong username or password';
	      }
	  
	  }else{

	      $user=new userModel;
	      $hashedpassword=$user->passwordHash($_POST['password']);
	      $user->register($_POST['first_name'],$_POST['last_name'],$_POST['user_name'],$hashedpassword,$_POST['email']);
	  }
	
       }catch(Exception $e){
	  $error[]=$e->getMessage();
       }
    }
 
 
 
 //REGISTER
 
 if($_POST['form'] == 'sign_up'){
          $db = dbConn::getConnection();
	  $stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
	  $stmt->execute(array(':username' => $_POST['user_name']));
	  $line = $stmt->fetch(PDO::FETCH_ASSOC);
         	
	  if(!empty($line['username'])){
	    $error[] = 'UNVALID USERNAME!';
	  }

          if($_POST['password'] != $_POST['confirmpassword']){
	    $error[] = 'Passwords do not match.';
	  }

          if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
       	    $error[] = 'Please enter a valid email address';
	  } else {
            $db = dbConn::getConnection();
	    $stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
	    $stmt->execute(array(':email' => $_POST['email']));
	    $line = $stmt->fetch(PDO::FETCH_ASSOC);
	    
	    if(!empty($line['email'])){
	      $error[] = 'EMAIL ALREADY TAKEN !';
	    }
      	}
     } 
	  

     //UPDATE PROFILE

     elseif($_POST['form'] == 'edit') {
     
       $oldusername = $_POST['oldusername'];
       $user = new userModel;
       $reset = $user->getUserInfomation($oldusername);
       $oldemail = $reset['email'];
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $avtr_url = $reset['avtr_url'];

       $check = false;
       while($check == false) {
         $db = dbConn::getConnection();
         $stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
         $stmt->execute(array(':username' => $username));
	 $line = $stmt->fetch(PDO::FETCH_ASSOC);
         
	 if(!empty($line['username']) && $line['username'] !== $oldusername){

         echo $error = 'USERNAME ALREADY TAKEN';
            
	 }
         
	 $db = dbConn::getConnection();
	 $stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
	 $stmt->execute(array(':email' => $email));
	 $line = $stmt->fetch(PDO::FETCH_ASSOC);
	 
	 if(!empty($line['email']) && $line['email'] !== $oldemail){
	     echo $error = 'EMAIL ALREADY TAKEN';
    
	 }
             $check = true;
       
       }

     
       define("UPLOAD_DIR", "/afs/cad.njit.edu/u/m/l/ml473/public_html/IS218_FINAL/img/");
      $user->update($oldusername, $first_name, $last_name, $username, $email, $avtr_url);
      
      }
       
    }
      
    public function put() {}
    public function delete() {}

}

?>
