<?php

  class userHomepageView {

     public function getHTML($errors='') {
   $homepage = '
          <!-- Page Content -->
    <div class="container">
    
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">PHP</h4>
        
        <a href="php.html" class="btn btn-primary">PHP</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">Java     </h4>
       
        <a href="java.html" class="btn btn-primary">Java</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">JavaScript</h4>
       
        <a href="jspage.html" class="btn btn-primary">JavaScript</a>
      </div>
    </div>
     
     <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">Python</h4>
       
        <a href="python.html" class="btn btn-primary">Python</a>
      </div>
    </div>
   <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">HTML/CSS</h4>
       
        <a href="webdev.html" class="btn btn-primary">HTML/CSS</a>
      </div>
    </div>
    <div class="card" style="width: 10rem; float:left;">
      <div class="card-block">
        <h4 class="card-title">C</h4>
       
        <a href="c.html" class="btn btn-primary">C</a>
      </div>
    </div>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Feaured Videos </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-3 portfolio-item">
                 <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=ipp4WPDwwvk&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object                       Oriented Programming (OOP): Introduction (1/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site                      https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                  <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>        
            </div>
            
            <div class="col-md-3 portfolio-item">
            
              <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=Yg31v6XB81o&index=2&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP Object               Oriented Programming (OOP): Classes (2/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site https://www              .codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
              <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>                
            </div>
            
            <div class="col-md-3 portfolio-item">
                <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=rR3TyVIV7QQ&index=3&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla">PHP                     Object Oriented Programming (OOP): Constructors (3/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official                     site https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>              
            
            </div>
            
            <div class="col-md-3 portfolio-item">
               <blockquote class="embedly-card"><h4><a href="https://www.youtube.com/watch?v=S3ZMtAFfyTM&list=PLfdtiltiRHWF0RicJb20da8nECQ1jFvla&index=4">PHP                     Object Oriented Programming (OOP): Inheritance (4/13)</a></h4><p>Want more? Explore the library at https://www.codecourse.com/lessons Official site                 https://www.codecourse.com Twitter https://twitter.com/teamcodecourse</p></blockquote>
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
                             
            </div>
        </div>
        <!-- /.row -->

     

        <hr>

        <!-- Pagination --
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
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

