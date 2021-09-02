<?php 
  class SongHelper 
  { 
     private $song;

     public function __construct() 
     { 
         if ( isset($_POST['song'])) 
               $this->song = $_POST['song'];
     }

     public function getSong() 
     { 
         if ( !$this->song ) 
             return ''; 
         else 
             return $this->song; 
     } 

  } 
?>