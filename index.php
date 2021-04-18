<?php 
/**
* Index unique, configure la session, redirige l'utilisateur au bon controleur selon le $_POST et affiche la bonne vue
* @param SESSION
* @param {String} act
*/
  if(!isset($_SESSION)) {
    session_set_cookie_params(0);
    session_start();
    $_SESSION['date'] = date('d-m-y');
  }
  $ppAct = (isset($_POST['act'])) ? $_POST['act'] : $_POST['act'] = NULL;
  $act = array('Connect','Home','Deconnect','App');
  if(in_array($ppAct, $act)) {
    include 'assets/scripts/php/controlers/c'.$ppAct.'.php';
  } else {
    include 'assets/scripts/php/controlers/cConnect.php';
  }

  include $view; 
?>