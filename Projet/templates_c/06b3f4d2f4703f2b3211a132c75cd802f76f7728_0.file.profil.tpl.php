<?php /* Smarty version 3.1.27, created on 2015-11-18 09:50:03
         compiled from "D:\Bureau\IUT\PHP\Uwamp3\www\Projet\application\views\modules\profil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31227564c3bbb5d80c7_02707027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b3f4d2f4703f2b3211a132c75cd802f76f7728' => 
    array (
      0 => 'D:\\Bureau\\IUT\\PHP\\Uwamp3\\www\\Projet\\application\\views\\modules\\profil.tpl',
      1 => 1447836561,
      2 => 'file',
    ),
    '630f3a59456e8e70c3f1d210f48f62603f491c71' => 
    array (
      0 => 'application\\views\\layout.tpl',
      1 => 1447835872,
      2 => 'file',
    ),
    '1dd0f49baf5e0581f8ec6c258091974d023ca350' => 
    array (
      0 => '1dd0f49baf5e0581f8ec6c258091974d023ca350',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '31227564c3bbb5d80c7_02707027',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c3bbb6560f6_20180642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c3bbb6560f6_20180642')) {
function content_564c3bbb6560f6_20180642 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31227564c3bbb5d80c7_02707027';
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
$_smarty_tpl->properties['nocache_hash'] = '31227564c3bbb5d80c7_02707027';
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