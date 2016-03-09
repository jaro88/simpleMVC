<?php /* Smarty version 3.1.27, created on 2016-03-08 21:21:43
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\mycv.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:44856df42671ec974_09674534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd695294bb724eb5b767ba926d1fd3ecd37bb241b' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\mycv.tpl',
      1 => 1457472054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44856df42671ec974_09674534',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df4267239602_85322122',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df4267239602_85322122')) {
function content_56df4267239602_85322122 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '44856df42671ec974_09674534';
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

                                <iframe src="/myportfolio/ViewerJS/#../zivotopis.pdf" width="100%" height="800px"></iframe>
                        
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