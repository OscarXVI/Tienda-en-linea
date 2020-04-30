<?php
/* Smarty version 3.1.33, created on 2020-04-28 23:56:33
  from 'C:\xampp\htdocs\tienda\admin321jkbfut\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea90901d4d896_65659431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4099c98c686d21b15a413b2c75f6f72526a59a93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin321jkbfut\\themes\\default\\template\\content.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea90901d4d896_65659431 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
