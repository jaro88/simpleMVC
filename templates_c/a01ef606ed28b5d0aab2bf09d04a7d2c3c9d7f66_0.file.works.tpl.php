<?php /* Smarty version 3.1.27, created on 2016-03-08 23:59:45
         compiled from "C:\programy\UniServerZ\www\simpleMVC\templates\works.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3131456df67715448e9_06326480%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01ef606ed28b5d0aab2bf09d04a7d2c3c9d7f66' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\simpleMVC\\templates\\works.tpl',
      1 => 1457481583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3131456df67715448e9_06326480',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df67715886f1_03517626',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df67715886f1_03517626')) {
function content_56df67715886f1_03517626 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3131456df67715448e9_06326480';
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
                                <a href="http://www.stehovanipraha-trip.cz/cs/kalkulacka" class="list-group-item" target="_blank">www.stehovani-trip.cz - len kalkulačka v js</a>
                                <a href="https://www.topclerks.cz/mojeucto" class="list-group-item" target="_blank">topclerks.cz/mojeucto - navrh + kodovanie online systému na zobrazenie učtovných dokladov </a>
                                <a href="convertor.zip" class="list-group-item">controler.zip - jednoduchý convertor CSV do MDB</a>
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