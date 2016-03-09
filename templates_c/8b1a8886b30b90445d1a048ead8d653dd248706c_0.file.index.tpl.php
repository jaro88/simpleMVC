<?php /* Smarty version 3.1.27, created on 2016-03-06 21:27:10
         compiled from "C:\xampp\htdocs\myportfolio\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2927156dc929e4a3048_49621828%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1a8886b30b90445d1a048ead8d653dd248706c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myportfolio\\templates\\index.tpl',
      1 => 1457296028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2927156dc929e4a3048_49621828',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dc929e4d7571_73319181',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dc929e4d7571_73319181')) {
function content_56dc929e4d7571_73319181 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2927156dc929e4a3048_49621828';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


Hallo world

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>