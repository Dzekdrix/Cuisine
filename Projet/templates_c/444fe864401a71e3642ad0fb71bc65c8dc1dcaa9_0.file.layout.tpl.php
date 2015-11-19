<?php /* Smarty version 3.1.27, created on 2015-11-18 08:48:51
         compiled from "D:\Bureau\IUT\PHP\Uwamp3\www\Projet\application\views\layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:258564c2d639f2593_05340850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '444fe864401a71e3642ad0fb71bc65c8dc1dcaa9' => 
    array (
      0 => 'D:\\Bureau\\IUT\\PHP\\Uwamp3\\www\\Projet\\application\\views\\layout.tpl',
      1 => 1447832805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258564c2d639f2593_05340850',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c2d63a7a099_35231086',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c2d63a7a099_35231086')) {
function content_564c2d63a7a099_35231086 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '258564c2d639f2593_05340850';
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
		<?php echo $_smarty_tpl->getSubTemplate ('modules\layout_entete.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</header>

	<body>

	</body>

	<footer>
		<?php echo $_smarty_tpl->getSubTemplate ('modules\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>

</html><?php }
}
?>