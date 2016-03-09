<?php /* Smarty version 3.1.27, created on 2016-03-08 21:22:48
         compiled from "C:\programy\UniServerZ\www\myportfolio\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:786156df42a8546bc7_27265454%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '626152ac128e24e59fb7599618eb2c5057cd0ef0' => 
    array (
      0 => 'C:\\programy\\UniServerZ\\www\\myportfolio\\templates\\footer.tpl',
      1 => 1457472164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786156df42a8546bc7_27265454',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56df42a8586046_34861020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56df42a8586046_34861020')) {
function content_56df42a8586046_34861020 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '786156df42a8546bc7_27265454';
?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kontakt</h4>
      </div>
        <div class="modal-body">
            
            e-mail: kokoruda.j@gmail.com
            
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  

<!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Menu Toggle Script -->
    <?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    <?php echo '</script'; ?>
>

</body>

</html> <?php }
}
?>