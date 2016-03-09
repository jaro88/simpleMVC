<?php /* Smarty version 3.1.27, created on 2016-03-06 21:53:12
         compiled from "C:\xampp\htdocs\myportfolio\templates\mycv.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2126556dc98b88e10c8_11156766%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4235683d15c139974062f3740296a8e22335d8c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myportfolio\\templates\\mycv.tpl',
      1 => 1457296449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126556dc98b88e10c8_11156766',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56dc98b8957479_91312143',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56dc98b8957479_91312143')) {
function content_56dc98b8957479_91312143 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2126556dc98b88e10c8_11156766';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


My CV

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>