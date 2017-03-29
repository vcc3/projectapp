<?php

  class userProfileView {

     public function getHTML($edit=false, $errors) {
      if(isset($errors)){
         $errorhtml = '
                      <div id="errors" class="errors">
                        <p>'.$errors.'</p>
                      </div>
         ';
       } else {
         $errorhtml = '';
       }
      
       if($edit == true) {
         $username = $_SESSION['username'];
         $user = new userModel;
         $line = $user->getUserInfomation($username);
         $profile = '
         
               
           <div id="profileform" class="form">
             <form id="edit" action="index.php?controller=userController&action=edit" method="post" enctype="multipart/form-data">
	     <center><h2>Profile</h2></center>
              '.$errorhtml.'
             <div id="profile" class="profile">
               <div id="photo">
	         <center><img width="200px" height="200px" src="'.$line['avtr_url'].'"/></center>
               </div>
	       <br>
	       <div>
                 <label for="photo">
		 <center><input type="file" name="avatar" accept="image/*"></center>
               </div>
	       <br>
	       <div>
	         <label for="firstname">First Name:</label>
		 <input type="text" id="firstname" name="first_name" value="'.$line['first_name'].'"/>
	       </div>
	       <br>
	       <div>
	         <label for="lastname">Last Name:</label>
	         <input type="text" id="lastname" name="last_name" value="'.$line['last_name'].'"/>
               </div>
	       <br>
	       <div>
	         <label for="username">User Name:  </label>
		 <input type="text" id="username" name="username" value="'.$username.'"/>
               </div>
	       <br>
	       <div>
	         <label for="email">  User Email: </label>
		 <input type="email" id="email" name="email" value="'.$line['email'].'"/>
	       </div>
	       <br>
	       <div>
                 <input type="hidden" name="form" value="edit" />
               </div>
	       <br>
	       <div>
	         <input type="hidden" name="oldusername" value="'.$username.'" />
               </div>
	       <br>
	       <div class="button">
	         <center><button type="submit" id="submit">Update</button></center>
               </div>
	     </div>
	     </form>
	   </div>
         ';

       }

       else {
         
         $username = $_SESSION['username'];
         $user = new userModel;
         $line = $user->getUserInfomation($username);

      $profile = '
      
         <div id="profileform" class="form">
	   <form id="edit">
	   <center><h2>Profile</h2></center>
             '.$errorhtml.'
             <div id="profile" class="profile">
	       <div id="photo">
                 <center><img width="200px" height="200px" src="'.$line['avtr_url'].'"/></center>
	       </div>
	       <br><br>
	       <center><div>
	       <div>
                 <label>First Name: '.$line['first_name'].'</label><br><br>
               </div>
	       <div>
	         <label>Last Name: '.$line['last_name'].'</label><br><br>
               </div>
	       <div>
	         <label>Username: '.$username.'</label><br><br>
               </div>
	       <div>
	         <label>Email: '.$line['email'].'</label><br><br>
               </div>
	       </div></center>
	       <div>
	         <center><button id="submit"><a href="index.php?controller=userController&action=edit">Edit</a></center>
               <br><br>
	       <div>
	     </div>


  	      ';
       }

    return $profile;
     }

  }
