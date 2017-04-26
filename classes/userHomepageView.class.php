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

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=ipp4WPDwwvk&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object Oriented Programming (OOP): Introduction (1/13)</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>PHP Object Oriented Programming: Introduction (1/13)</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=Yg31v6XB81o&index=2&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object Oriented Programming (OOP): Classes (2/13)</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>PHP Object Oriented Programming: Classes (2/13)</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=rR3TyVIV7QQ&index=3&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object Oriented Programming (OOP): Constructors (3/13)</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>PHP Object Oriented Programming: Constructors (3/13)</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=S3ZMtAFfyTM&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla&index=4">PHP Object Oriented Programming (OOP): Inheritance (4/13)</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>PHP Object Oriented Programming: Inheritance (4/13)</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>





            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=08yflg_VVO8&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 1 # JavaScript Introduction</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 1 # JavaScript Introduction</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=NfwqGwNMQeE&index=2&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 2 # Install and Configure Eclipse for JavaScript</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 2 # Install and Configure Eclipse for JS</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=FxSkfmP-ZO0&index=3&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 3 # Variables and Comments</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 3 # Variables and Comments</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

                  </p>

                </div>

              </div>

            </div>



            <div class="col-md-3 col-sm-6 portfolio-item">

              <div class="thumbnail">

                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=6L0i7yTFiVg&index=4&list=PLS1QulWo1RIZ4erAYe3k8zWA5jAu72mVa">Javascript Tutorial For Beginners 4 # Data Types</a></h4></blockquote>

                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

                <div class="caption">

                  <p>Javascript Tutorial For Beginners 4 # Data Types</p>

                  <p>

                    <a href="#" class="btn btn-primary">Add to my list!</a>

                    <!--a href="#" class="btn btn-default">More Info</a-->

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

