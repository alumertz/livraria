<?php
    session_start();
    session_destroy();
	header('Location: ../view/php/index.php');	
