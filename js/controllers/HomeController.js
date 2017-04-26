app.controller('HomeController', ['$scope', function($scope) {
	
	
	/* THESE ARE YOUR LIST OF MOVIES AND ACCOMPANYING METADATA
	//	
	// 	They are in the following format:
	// 	title (String): the name of the movie
	// 	iscore (Number): the IMDB score
	// 	rating (String): the movie's MPAA rating 
	// 	released (Date): the release date
	// 	country (String): the country of production
	// 	posters (Array): an array of String values with the URL to movie posters
	// 	imdb (String): the URL to the corresponding IMDB website
	// 	website (String): the URL to the corresponding official website
	// 	likes (Number): a fictitious number of user likes
	// 	dislikes (Number): a fictitious number of user dislikes
	// 	posterindex (Number): a counter to use with the "posters" array to keep track of the current displayed poster index
	//
	// FOR STEP 16, ADD THREE OF YOUR OWN FAVORITE MOVIES WITH METADATA TO THE END OF THIS LIST
	*/
	$scope.movies = [
    { 
      title:	'The Shawshank Redemption', 
      iscore:	9.3,
      rating:	'R',
      runtime:	142,
      released:	new Date('1994', '10', '14'),
      country:	'USA',
      posters:	['img/shawshank.jpg','img/shawshank2.jpg','img/shawshank3.jpg'],
      imdb:		'http://www.imdb.com/title/tt0111161',
      website:	'https://www.facebook.com/ShawshankRedemptionFilm',
      likes:	1021,
      dislikes:	122,
      posterindex: 0
	},
    { 
      title:	'The Godfather', 
      iscore:	9.2,
      rating:	'R',
      runtime:	175,
      released:	new Date('1972', '03', '24'),
      country:	'USA',
      posters:	['img/godfather.jpg','img/godfather_2.jpg','img/godfather_3.jpg'],
      imdb:		'http://www.imdb.com/title/tt0068646',
      website:	'https://www.facebook.com/thegodfather',
      likes:	928,
      dislikes:	109,
      posterindex: 0
	},
    { 
      title:	'The Godfather: Part II', 
      iscore:	9.0,
      rating:	'R',
      runtime:	202,
      released:	new Date('1974', '12', '20'),
      country:	'USA',
      posters:	['img/godfather2.jpg','img/godfather2_2.jpg'],
      imdb:		'http://www.imdb.com/title/tt0071562',
      website:	'https://www.facebook.com/thegodfather',
      likes:	855,
      dislikes:	99,
      posterindex: 0
	},
    { 
      title:	'The Dark Knight', 
      iscore:	8.9,
      rating:	'PG-13',
      runtime:	152,
      released:	new Date('2008', '07', '18'),
      country:	'USA',
      posters:	['img/darkknight.jpg','img/darkknight2.jpg'],
      imdb:		'http://www.imdb.com/title/tt0468569',
      website:	'http://www.42entertainment.com/work/whysoserious',
      likes:	828,
      dislikes:	127,
      posterindex: 0
	},
    { 
      title:	'Schindler\'s List', 
      iscore:	8.9,
      rating:	'R',
      runtime:	195,
      released:	new Date('1993', '11', '30'),
      country:	'USA',
      posters:	['img/schindlerslist.jpg'],
      imdb:		'http://www.imdb.com/title/tt0108052',
      website:	'https://www.uphe.com/schindlers-list',
      likes:	812,
      dislikes:	101,
      posterindex: 0
	},
   { 
      title:	'The Lord of the Rings: The Fellowship of the Ring', 
      iscore:	8.8,
      rating:	'PG-13',
      runtime:	175,
      released:	new Date('2001', '12', '19'),
      country:	'USA',
      posters:	['img/lotr1.jpg','img/lotr2.jpg'],
      imdb:		'http://www.imdb.com/title/tt0120737/?ref_=nv_sr_1',
      website:	'http://www.lordoftherings.net/',
      likes:	9999,
      dislikes:	1,
      posterindex: 0
	},
   { 
      title:	'Jurassic Park', 
      iscore:	8.1,
      rating:	'PG-13',
      runtime:	195,
      released:	new Date('1993', '06', '11'),
      country:	'USA',
      posters:	['img/jp1.jpg','img/jp2.jpg'],
      imdb:		'http://www.imdb.com/title/tt0107290/?ref_=nv_sr_2',
      website:	'http://www.jurassicworld.com/home',
      likes:	1000000,
      dislikes:	101,
      posterindex: 0
	},
   { 
      title:	'Star Wars: The Force Awakens', 
      iscore:	8.1,
      rating:	'PG-13',
      runtime:	136,
      released:	new Date('2015', '12', '18'),
      country:	'USA',
      posters:	['img/sw1.jpg','img/sw2.jpg'],
      imdb:		'http://www.imdb.com/title/tt2488496/?ref_=tt_mv',
      website:	'http://www.starwars.com/the-force-awakens',
      likes:	9000000,
      dislikes:	101,
      posterindex: 0
	}
	
	
  ];
	
	

	
	/* ADD VARIABLES FOR STEP 3 HERE */
	$scope.title  = "Videos." ;
  $scope.owner  = "Victor Carlos";
  $scope.github = "https://github.com/vcc3/IS219Project3";
	
	
	
	
	
	
	
	/* ADD FUNCTIONS FOR STEP 7 HERE */
		
	$scope.likes        = function(index){
     index.likes++;
 }
	$scope.dislikes     = function(index){
     index.dislikes++;
 }
   /* same way to iterate thru  like the last assignment with the buttons*/
  $scope.posterClick  = function(index){
    if($scope.movies[index].posterindex == $scope.movies[index].posters.length-1){
			    $scope.movies[index].posterindex = 0;
	       	}
	      	else {
			    $scope.movies[index].posterindex++;
		      }
              
   	}
  
  $scope.timeText    = function(min){
  return Math.floor(min / 60) + " Hrs: " + (min%60) + " min.";
	}

	
	
	
	
	
	
}]);
