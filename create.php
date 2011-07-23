<?php
  $phar = new Phar('app.phar');
  $stub = file_get_contents('stub.php');
  $phar->setStub($stub); 
  $phar->buildFromDirectory('app');
?>
