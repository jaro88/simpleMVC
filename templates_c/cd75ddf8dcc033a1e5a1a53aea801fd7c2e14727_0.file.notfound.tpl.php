<?php /* Smarty version 3.1.27, created on 2016-03-08 19:54:51
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\notfound.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1684356df2e0bcdabe8_94641283%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd75ddf8dcc033a1e5a1a53aea801fd7c2e14727' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\notfound.tpl',
      1 => 1457296028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684356df2e0bcdabe8_94641283',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df2e0bef7c81_39333447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df2e0bef7c81_39333447')) {
function content_56df2e0bef7c81_39333447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1684356df2e0bcdabe8_94641283';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);
?>


Hallo world

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>