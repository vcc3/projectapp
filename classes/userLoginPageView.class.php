<?php

  class userLoginPageView {

     public function getHTML($errors='', $form) {
   
      $form = '
          
        <div id="loginform" class="form" style ="width:100px;float:left;">
          <form id="login" action="index.php?controller=userController" method="post">
            <center><h2>Login</h2></center>
	    <div>
	      <label for="username">User Name:</label><br>
              <input type="text" id="username" name="username" placeholder=""/>
            </div>
	    <br>
	    <div>
	      <label for="password">Password:</label><br>
	      <input type="text" id="password" name="password" placeholder=""/>
            </div>
	    <br>
	    <div class="button">
	      <center><button type="submit" id="submit">Login</button></center>
            </div>
	  </form>
     <p> If you do not have an account , please fill the form out below.</p>
	</div>
        
        <div id="registerform" class="form" style ="width:100px;float:right;">
          <form id="register" action="index.php?controller=userController" method="post">
            <h2><center>Register</center></h2>
	    <div>
	      <label for="firstname">First Name:</label><br>
              <input type="text" id="firstname" name="first_name"/>
            </div>
	    <br>
	    <div>
	      <label for="lastname">Last Name:</label><br>
	      <input type="text" id="lastname" name="last_name"/>
	    </div>
	    <br>
	    <div>
	      <label for="username">User Name:</label><br>
              <input type="text" id="username" name="user_name"/>
            </div>
	    <br>
	    <div>
	      <label for="email">Email:</label><br>
	      <input type="email" id="email" name="email"/>
            </div>
	    <br>
	    <div>
	      <label for="password">Password:</label><br>
	      <input type="password" id="password" name="password"/>
            </div>
	    <br>
	    <div>
	      <label for="comfirmpassword">Comfirm Password:</label><br>
	      <input type="password" id="confirmpassword" />
            </div>
	    <br>
	    <div>
	      <center><button type="submit" id="submit">Register</button></center>
            </div>
	    <br>
	  </form>
        </div>';
       return $form;
    }

}
