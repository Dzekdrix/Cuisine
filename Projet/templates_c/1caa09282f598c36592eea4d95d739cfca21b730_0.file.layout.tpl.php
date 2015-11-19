<?php /* Smarty version 3.1.27, created on 2015-11-16 16:36:11
         compiled from "D:\Utilisateur\Bureau\IUT\UwAmp\www\Projet\application\views\layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31800564a05fbdbec26_13978470%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1caa09282f598c36592eea4d95d739cfca21b730' => 
    array (
      0 => 'D:\\Utilisateur\\Bureau\\IUT\\UwAmp\\www\\Projet\\application\\views\\layout.tpl',
      1 => 1447691769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31800564a05fbdbec26_13978470',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564a05fbdef343_86269850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564a05fbdef343_86269850')) {
function content_564a05fbdef343_86269850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31800564a05fbdbec26_13978470';
echo '<?xml ';?>
version-"1.0" encoding-"utf-8"<?php echo '?>';?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang"fr" lang="fr">

<head>
	<Title> layout.tpl </title>
	<meta http-equiv="content-type"
		content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
</head>

<header>
	<?php echo $_smarty_tpl->getSubTemplate ('application\views\layout\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</header>

<body>

</body>

<footer>
	<?php echo $_smarty_tpl->getSubTemplate ('application\views\layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</footer>

</html><?php }
}
?>