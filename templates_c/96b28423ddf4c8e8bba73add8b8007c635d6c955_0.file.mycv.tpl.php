<?php /* Smarty version 3.1.27, created on 2016-03-08 23:56:59
         compiled from "C:\programy\UniServerZ\www\simpleMVC\templates\mycv.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1890456df66cb7a6729_96236391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96b28423ddf4c8e8bba73add8b8007c635d6c955' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\simpleMVC\\templates\\mycv.tpl',
      1 => 1457481417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890456df66cb7a6729_96236391',
  'variables' => 
  array (
    'rootURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df66cb7f25d1_05828413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df66cb7f25d1_05828413')) {
function content_56df66cb7f25d1_05828413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1890456df66cb7a6729_96236391';
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
                        <h1>Životopis</h1>

                                <iframe src="<?php echo $_smarty_tpl->tpl_vars['rootURL']->value;?>
ViewerJS/#../zivotopis.pdf" width="100%" height="800px"></iframe>
                        
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