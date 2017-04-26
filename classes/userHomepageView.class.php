<?php

  class userHomepageView {

     public function getHTML($errors='') {
   $homepage = '
          <!-- Page Content -->
    <div class="container">
    
    <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h2> Welcome to CodeHub!</h2>            
            <!-- Single button -->
                <div class="btn-group">
                <p> Use the drop down to navigate to your desired programming language page.</p>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Programming Language <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="index.php?controller=userController&action=java">Java</a></li>
                    <li><a href="index.php?controller=userController&action=php" >PHP</a></li>
                    <li><a href="index.php?controller=userController&action=javascript">Javascript</a></li>
                    <li><a href="index.php?controller=userController&action=python">Python</a></li>
                    <li><a href="index.php?controller=userController&action=webdev" >HTML/CSS</a></li>
                    <li><a href="index.php?controller=userController&action=c">C</a></li>
                    <li role="separator" class="divider"></li>
                  
                  </ul>
                </div>                        
        </header>
    
  

        

       <!-- Projects Row -->

        <div class="row">



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=8Ib7nwc33uA&list=PLGLfVvz_LVvSaXCpKS395wbCcmsmgRea7&index=1">How to Install GCC</a></h4><p>Get the Step-by-Step List Here : http://goo.gl/Kd6jhf MinGW : http://sourceforge.net/projects/mingw/ In the past week I have been asked a countless number of times how to install GCC ( GNU Compiler Collection ). I show you how to install GCC on Windows as well as on a Mac in the video below.</p></blockquote>
 
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>How to Install GCC</p>
                  	

                  <p>

                    

                    <a href="index.php?controller=userController&action=c1" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=nXvy5900m3M&list=PLGLfVvz_LVvSaXCpKS395wbCcmsmgRea7&index=2">C Video Tutorial</a></h4><p>Get the Code Here: http://goo.gl/u23ZZ Support me on Patreon : https://www.patreon.com/derekbanas Welcome to part 1 of my C Video Tutorial! I have been getting this request constantly lately so I decided to cover the C programming language in a fast and complete tutorial series. It will probably be complete by the end of the weekend!</p></blockquote>


                <div class="caption">

                  <p>C Video Tutorial</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=c2" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=r59xYe3Vyks&list=PLS1QulWo1RIbfTjQvTdj8Y6yyq4R7g-Al">Java Tutorial For Beginners 1 - Introduction and Installing the java (JDK) Step by Step Tutorial</a></h4><p>Find More Codes On My Website - http://www.codebind.com/ java examples for beginners. java beginners tutorial.mit java programmieren. java online tutorial. compiler java. Java (Beginner) Programming Tutorials. Java For Beginners . The Java™ Tutorials . Welcome - Learn Java - Free Interactive Java Tutorial Learn Java Programming - Learn To Code Java Like a Pro?.</p></blockquote>

                <div class="caption">

                  <p>Java Tutorial For Beginners 1 - Introduction and Installing the java </p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=java1" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                 <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=gzlhm0jco0g&list=PLS1QulWo1RIbfTjQvTdj8Y6yyq4R7g-Al&index=2">Java Tutorial For Beginners 2 - Installing Eclipse IDE and Setting up Eclipse</a></h4><p>ide installation for eclipse how to install eclipse ide force.com ide installation for eclipse helios Installing the Eclipse Plugin Set Up the Eclipse IDE for Windows Setting up your Development Environment Spring Environment Setup Java and Eclipse: Download/Installation Instructions how to install eclipse ide for javascript web developers how to</p></blockquote>
                
                <div class="caption">

                  <p>Java Tutorial For Beginners 2 - Installing Eclipse IDE and Setting up Eclipse</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=java2" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>





            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=IX6mc9l6tY4&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M&index=2">Installing Python 3 - How to install/use both Python 2 and Python 3</a></h4><p>Sample code for this basics series: http://pythonprogramming.net/beginner-python-programming-tutorials/ Python 3 Programming tutorial Playlist: http://www.youtube.com/watch?v=oVp1vrfL_w4&feature=share&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M Everyone starts as a beginner. Hopefully I can help many of you out of that stage! Many people know they want to learn to program, but they are not sure which language to go with or where to start.</p></blockquote>
                
                <div class="caption">

                  <p>Installing Python 3 - How to install/use both Python 2 and Python 3</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=python1" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">
              <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=UsCQXe1OHZk&list=PLQVvvaa0QuDe8XSftW-RAxdo6OmaeL85M&index=3">Python 3 Tutorial: Print Function and Strings</a></h4><p>The print function in Python is a function that outputs to your console window whatever you say you want to print out. At first blush, it might appear that the print function is rather useless for programming, but it is actually one of the most widely used functions in all of python.</p></blockquote>
                <div class="caption">

                  <p>Python 3 Tutorial: Print Function and Strings</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=python2" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=08yflg_VVO8&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 1 # JavaScript Introduction</a></h4><p>earn Javascript in simple and easy steps.</p></blockquote>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 1 # JavaScript Introduction</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=javascript1" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

               <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=NfwqGwNMQeE&index=2&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 2 # Install and Configure Eclipse for JavaScript</a></h4><p>Searches related to javascript editor javascript editor download javascript ide online javascript editor javascript editor eclipse javascript html editor javascript text editor javascript editor linux Searches related to Eclipse for JavaScript eclipse javascript project eclipse ide download</p></blockquote>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 2 # Install and Configure Eclipse for JavaScript</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <a href="index.php?controller=userController&action=javascript2" class="btn btn-default">Watch!</a>

                  </p>

                </div>

              </div>

            </div>





        </div>

        <!-- /.row -->



        <hr>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
';
          return $homepage;
       }
  }

