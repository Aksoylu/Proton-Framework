<?php
/* Description: Router for Proton Framework */


PROTON::SETLANGUAGE(PROTON::DETECTLANGUAGE());

Route::GET("/", function(){ 
  
  PROTON::LANGUAGE("helloLanguage");
  $controller = PROTON::CONTROLLER("helloController");
  PROTON::RENDER("hello", $controller);


});


/* Error Handler */

Route::ERROR(function(){ 

  PROTON::LANGUAGE("mainLanguage");
  $controller = PROTON::CONTROLLER("maincontroller", ["page" => "error"]);
  PROTON::RENDER("_error", $controller);

  });


  


?>