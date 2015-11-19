<?php

include_once 'config.inc.php';

$data = array();

include_once 'application\modules\profil.inc.php';
include_once 'application\modules\accueil.inc.php';

//try {
	$bdd = new PDO($cbdd['dsn'], $cbdd['user'], $cbdd['pwd']);
//}
/*catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
    echo "<p>Erreur de connexion à la base de données<p>";
}*/

//$_GET['page'] = '';

if (isset($_GET['page']) && array_key_exists($_GET['page'], $_PAGES))
	$current_page = $_PAGES[$_GET['page']];
else 
	$current_page = $_PAGES['error_404'];

require('application\libraries\smarty-3.1.27\libs\Smarty.class.php');

$smarty = new Smarty;
$smarty->setTemplateDir('application\views');
$smarty->assign('nom', $data['nom']);
$smarty->assign('prenom', $data['prenom']);
$smarty->assign('alea', $data['alea']);
$smarty->display('application\views\modules\\'.$current_page.'.tpl');
//$smarty->display('application\views\modules\profil.tpl');

?>