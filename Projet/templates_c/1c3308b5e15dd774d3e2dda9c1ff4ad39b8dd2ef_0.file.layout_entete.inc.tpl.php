<?php /* Smarty version 3.1.27, created on 2015-11-18 07:21:35
         compiled from "D:\Bureau\IUT\PHP\Uwamp3\www\Projet\application\views\layout_entete.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1986564c26ff347c98_36631947%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c3308b5e15dd774d3e2dda9c1ff4ad39b8dd2ef' => 
    array (
      0 => 'D:\\Bureau\\IUT\\PHP\\Uwamp3\\www\\Projet\\application\\views\\layout_entete.inc.tpl',
      1 => 1444229363,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\layout.tpl',
      1 => 1447831184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986564c26ff347c98_36631947',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c26ff3e0756_89488243',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c26ff3e0756_89488243')) {
function content_564c26ff3e0756_89488243 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1986564c26ff347c98_36631947';
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

	<header>
		<?php echo $_smarty_tpl->getSubTemplate ('application\views\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</header>

	<body>

	</body>

	<footer>
		<?php echo $_smarty_tpl->getSubTemplate ('application\views\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>

</html><?php }
}
?>