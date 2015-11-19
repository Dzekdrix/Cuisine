<?php /* Smarty version 3.1.27, created on 2015-11-19 13:51:27
         compiled from "D:\Bureau\IUT\PHP\Uwamp3\www\Projet\application\views\modules\accueil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2321564dc5cf266de9_44752607%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3afe4ce1b95b1ca8f67f5fbde00b144dce90cd1' => 
    array (
      0 => 'D:\\Bureau\\IUT\\PHP\\Uwamp3\\www\\Projet\\application\\views\\modules\\accueil.tpl',
      1 => 1447937483,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\layout.tpl',
      1 => 1447835872,
      2 => 'file',
    ),
    '434300b857f5b92f8879a55e82a4d49322ea858d' => 
    array (
      0 => '434300b857f5b92f8879a55e82a4d49322ea858d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2321564dc5cf266de9_44752607',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564dc5cf306ca9_78080959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564dc5cf306ca9_78080959')) {
function content_564dc5cf306ca9_78080959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2321564dc5cf266de9_44752607';
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
$_smarty_tpl->properties['nocache_hash'] = '2321564dc5cf266de9_44752607';
?>


<h2> Page d'accueil </h2>

<article>

	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
</article>

	<h3> Nombres aléatoires : </h3>
	<?php
$_from = $_smarty_tpl->tpl_vars['alea']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
	<p> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br/></p>
	<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>



		<footer>
			<?php echo $_smarty_tpl->getSubTemplate ('layout\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</footer>

	</body>
</html><?php }
}
?>