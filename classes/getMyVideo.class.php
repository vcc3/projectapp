<?php

  class getMyVideo {

     public function getHTML($errors='') {
   $page = '



	  
    <div class="header">	    
      <div class="container">
        <h1 id="app_title">{{title}}</h1>
      </div>      
    </div>

    <div class="main">      
      <div class="container">
        <div class="col-md-6" ng-repeat="film in movies"> 
           <div class="thumbnail" >
           
					          <img class="poster" ng-src ="{{film.posters[film.posterindex]}}" ng-click="posterClick($index)"/>
				          	<div class="imageInfo">{{film.posterindex}}</div>
                    					
				            <{{film.title}}> 
				          	<{{film.iscore}}> 
				          	<p class="runtime">Runtime: {{film.runtime}}</p> 
					          <p class="released">Released: {{film.released | date}} | Rated: {{film.rating}}</p>                                                                      	          <p class="websites">Websites: <a href ="{{film.imdb}}">IMDB</a> <a href ="{{film.website}}"> | Offical</a></p>	
                    				
		                <div class="social">
		                <p class="likes" ng-click ="likes(film)"><i class="fa fa-thumbs-up" ></i> {{film.likes}}</p>
		                <p class="dislikes" ng-click ="dislikes(film)"><i class="fa fa-thumbs-down" ></i> {{film.dislikes}}</p>
                    </div>                
                    
                                    
           </div>
        </div> 
        
      </div>
    </div>
    

    <div class="footer">
      <div class="container">
		
        <a id="github" class="btn btn-lg btn-warning" href ="{{github}}">
			  <i class="fa fa-lg fa-github pull-left" aria-hidden="true"></i> {{owner}}  
  		  </a>
      </div>
    </div>

  
  	<!-- Modules -->
	<script type="text/javascript" src="js/app.js"></script>
	 
	<!-- Controllers -->
	<script type="text/javascript" src="js/controllers/HomeController.js"></script>
	 
	<!-- Services -->
  
</body>
</html>

';
          return $page;
       }
  }

