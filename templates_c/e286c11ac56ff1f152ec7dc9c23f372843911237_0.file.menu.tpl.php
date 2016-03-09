<?php /* Smarty version 3.1.27, created on 2016-03-08 23:59:01
         compiled from "C:\programy\UniServerZ\www\simpleMVC\templates\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2897756df67458ae0a7_13018307%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e286c11ac56ff1f152ec7dc9c23f372843911237' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\simpleMVC\\templates\\menu.tpl',
      1 => 1457481540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2897756df67458ae0a7_13018307',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df67458db6a7_67049328',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df67458db6a7_67049328')) {
function content_56df67458db6a7_67049328 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2897756df67458ae0a7_13018307';
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
                    <a href="cv" >Životopis</a>
                </li>
                <li>
                    <a href="works">Práce</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal">Kontakt</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper --><?php }
}
?>