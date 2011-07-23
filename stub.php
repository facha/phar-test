<?php
    Phar::interceptFileFuncs();
    Phar::mungServer(array('REQUEST_URI'));
    Phar::webPhar();
    __HALT_COMPILER();
?>
