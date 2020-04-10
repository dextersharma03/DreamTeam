<?php
//Require files
require_once("inc/config.inc.php");
require_once("inc/Entity/Student.class.php");
require_once("inc/Utility/PDOService.class.php");
require_once("inc/Utility/StudentDAO.class.php");
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/Utility/Page.class.php");

//Start the sesion... one last time!
session_start();

unset($_SESSION['user']);

//Destroy the sesison
session_destroy();

Page::header();
Page::thankYou();
Page::footer();

?>