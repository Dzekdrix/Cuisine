<?php /* Smarty version 3.1.27, created on 2015-11-18 09:20:19
         compiled from "application\views\modules\layout_pied.inc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6191564c34c37becb0_62135247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b0767484d32224e3592e03aac120243319dcaeb' => 
    array (
      0 => 'application\\views\\modules\\layout_pied.inc.tpl',
      1 => 1444229367,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\layout.tpl',
      1 => 1447834814,
      2 => 'file',
    ),
    '23ffe954f73faf2b987aa9fb73f512c15646dfff' => 
    array (
      0 => '23ffe954f73faf2b987aa9fb73f512c15646dfff',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '6191564c34c37becb0_62135247',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c34c37e6511_70404105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c34c37e6511_70404105')) {
function content_564c34c37e6511_70404105 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6191564c34c37becb0_62135247';
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
		<header>	</header>
		<?php
$_smarty_tpl->properties['nocache_hash'] = '6191564c34c37becb0_62135247';
?>


<article>
	accueil.tpl
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
</article>

	
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
		<?php echo $_smarty_tpl->getSubTemplate ('modules\layout_pied.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</footer>
	</body>
</html><?php }
}
?>