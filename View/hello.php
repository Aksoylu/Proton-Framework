<?php
PROTON::TITLE("Proton Framework Example");
PROTON::CSSDEF("css/bootstrap.css");
PROTON::FAVDEF("favicon.ico");
PROTON::JSDEF("js/action.js");

?>

  <!-- Page content -->
  <main role="main" class="container mt-5">
    <p class="lead" style="font-size:40px;"><?php echo PROJECT_NAME; ?></p>
    <?php  PROTON::IMDEF("img/logo.png"); ?>

    <p class="lead"><?php echo $language->hello;?></p>
    <p><?php echo $language->start_here; ?> <a href="http://document.proton.aksoylu.space"><?php echo $language->document_page; ?></a></p>
  </main>

  <footer class="footer">
    <div class="container">
      <span class="text-muted"><?php echo $language->web_page; ?> <a href="Proton.aksoylu.space">Proton.aksoylu.space</a></span>
      <br>
      <button style="margin-top:15px" type="button" onClick="fetchService()" class="btn btn-primary">Web Service Test</button>


    </div>
  </footer>
