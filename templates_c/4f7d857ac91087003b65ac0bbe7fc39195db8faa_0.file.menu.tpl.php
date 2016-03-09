<?php /* Smarty version 3.1.27, created on 2016-03-08 22:18:23
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:69256df4fafd9c318_16109089%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7d857ac91087003b65ac0bbe7fc39195db8faa' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\menu.tpl',
      1 => 1457475500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69256df4fafd9c318_16109089',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df4fafdde439_18085229',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df4fafdde439_18085229')) {
function content_56df4fafdde439_18085229 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '69256df4fafd9c318_16109089';
?>
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Jaroslav Kokoruďa
                    </a>
                </li>
                <li>
                    <a href="MyCv" >Životopis</a>
                </li>
                <li>
                    <a href="works">Práce</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal">Kontakt</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper --><?php }
}
?>