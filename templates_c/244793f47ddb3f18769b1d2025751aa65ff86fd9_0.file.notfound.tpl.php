<?php /* Smarty version 3.1.27, created on 2016-03-08 23:36:53
         compiled from "C:\programy\UniServerZ\www\simpleMVC\templates\notfound.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1199756df621579fe63_13709582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244793f47ddb3f18769b1d2025751aa65ff86fd9' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\simpleMVC\\templates\\notfound.tpl',
      1 => 1457480210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1199756df621579fe63_13709582',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df62157daf46_90890342',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df62157daf46_90890342')) {
function content_56df62157daf46_90890342 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1199756df621579fe63_13709582';
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
                        <h1>Stránka nenájdena</h1>
                                
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>