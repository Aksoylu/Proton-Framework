<?php
/* Description: Service Router for Proton Framework */

Route::CONFIG(array(
	"extension"=>SERVICE_EXTENSION  
  ));

  PROTON::SETLANGUAGE(PROTON::DETECTLANGUAGE());

  //TODO: EMBED LANGUAGE TO SERVICE

  Route::POST("whatTimeIsIt", function(){ 

      SERVICE::LANGUAGE("helloLanguage");
      SERVICE::BIND("mainService@returnTime", $_POST);
  
  });


Route::ERROR(function(){ 

    echo "Error, service not found";

  });


?>