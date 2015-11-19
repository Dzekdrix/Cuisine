<?php /* Smarty version 3.1.27, created on 2015-11-19 14:40:45
         compiled from "C:\wamp\www\Cuisine\Projet\application\views\modules\profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23539564dd15d813d20_57712896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c722f0b2aa995b3f0465cb3aa9c8a4ea6dcc33e' => 
    array (
      0 => 'C:\\wamp\\www\\Cuisine\\Projet\\application\\views\\modules\\profil.tpl',
      1 => 1447939660,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\layout.tpl',
      1 => 1447939660,
      2 => 'file',
    ),
    '454dbef5dca512f410e04fb285b3c61de44a6097' => 
    array (
      0 => '454dbef5dca512f410e04fb285b3c61de44a6097',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '23539564dd15d813d20_57712896',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564dd15d8808b7_99280368',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564dd15d8808b7_99280368')) {
function content_564dd15d8808b7_99280368 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23539564dd15d813d20_57712896';
echo '<?xml ';?>
version-"1.0" encoding-"utf-8"<?php echo '?>';?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang"fr" lang="fr">

	<head>
		<meta http-equiv="content-type"
			content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<Title> Super Site </title>
	</head>
	<body>
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ('layout\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '23539564dd15d813d20_57712896';
?>

	<p>Bienvenue <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
</p>


		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>

	</body>
</html><?php }
}
?>