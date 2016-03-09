<?php /* Smarty version 3.1.27, created on 2016-03-08 23:24:20
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\works.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3119056df5f24dd3468_75094303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1220e41075887c6c37e7486e5d9513bc69b18a3' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\works.tpl',
      1 => 1457479458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3119056df5f24dd3468_75094303',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df5f24e2efe8_21517709',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df5f24e2efe8_21517709')) {
function content_56df5f24e2efe8_21517709 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3119056df5f24dd3468_75094303';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div id="wrapper">

        <!-- Sidebar -->
            <?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" style="margin-left: -40px" id="menu-toggle">Menu</a>
                        <h1>Práce</h1>
                            <div class="list-group">
                                <a href="http://www.topclerks.cz" class="list-group-item" target="_blank" >www.topclerks.cz - html + php kontaktný formular</a>
                                <a href="http://www.stehovanipraha-trip.cz/cs/kalkulacka" class="list-group-item">www.stehovani-trip.cz - len kalkulačka v js</a>
                                <a href="https://www.topclerks.cz/mojeucto" class="list-group-item">topclerks.cz/mojeucto - navrh + kodovanie online systému na zobrazenie učtovných dokladov </a>
                                <a href="convertor.zip" class="list-group-item">jednoduchý convertor CSV do MDB</a>
                            </div>
                                
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>