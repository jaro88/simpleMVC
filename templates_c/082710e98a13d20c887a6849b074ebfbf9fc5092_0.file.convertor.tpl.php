<?php /* Smarty version 3.1.27, created on 2016-03-08 20:46:34
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\convertor.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:349656df3a2a4f4fc3_22747434%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082710e98a13d20c887a6849b074ebfbf9fc5092' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\convertor.tpl',
      1 => 1457296449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349656df3a2a4f4fc3_22747434',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df3a2a537610_09036958',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df3a2a537610_09036958')) {
function content_56df3a2a537610_09036958 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '349656df3a2a4f4fc3_22747434';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


My CV

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>