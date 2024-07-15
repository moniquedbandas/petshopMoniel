<?php
session_start();
session_unset();
session_destroy();
header('Location: ../view/telaLogin.php');
exit();
