<?php 
  class userTableView {

     public function getHTML($errors='') {

try {
        
         $db = dbConn::getConnection();
         $stmt = $db->query('SELECT memberID, username,first_name,last_name, email FROM members ORDER BY memberID');
 		  	 $array = $stmt->fetchAll(\PDO::FETCH_ASSOC);
         $headers = array(
             '0' => 'UserID',
             '1' => 'Username',
             '2' => 'First Name',
	           '3' => 'Last Name',
	           '4' => 'Email'
         );
         array_unshift($array, $headers);

 		   } catch(PDOException $e) {
 		     echo '<p>'.$e->getMessage().'</p>';
 		   }
       $table = new table();
       $getTable = $table->getHTML($array);
       $tableHTML = '
          <center> <form id="form">
	   <h2><center>User table</center></h1>
           '.$errorhtml.'
           '.$getTable.'
           </form></center
	   >';

       return $tableHTML;
    }

}
