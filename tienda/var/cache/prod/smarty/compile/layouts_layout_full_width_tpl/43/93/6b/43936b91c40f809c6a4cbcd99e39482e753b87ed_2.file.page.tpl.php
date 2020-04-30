<?php
/* Smarty version 3.1.33, created on 2020-04-28 22:17:31
  from 'C:\xampp\htdocs\tienda\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea8f1cbbf4260_47375547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43936b91c40f809c6a4cbcd99e39482e753b87ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\classic\\templates\\page.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea8f1cbbf4260_47375547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7448231715ea8f1cb9a6f05_13314609', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_16946416605ea8f1cb9bf838_25769315 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19566698165ea8f1cb9be631_87787633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16946416605ea8f1cb9bf838_25769315', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16025247325ea8f1cbbe1381_38527328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18785984045ea8f1cbbefcc6_77471200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15574907915ea8f1cbbdf9a8_15866682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16025247325ea8f1cbbe1381_38527328', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18785984045ea8f1cbbefcc6_77471200', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9197919215ea8f1cbbf2904_72323514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4670612785ea8f1cbbf1f10_92368954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9197919215ea8f1cbbf2904_72323514', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7448231715ea8f1cb9a6f05_13314609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7448231715ea8f1cb9a6f05_13314609',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19566698165ea8f1cb9be631_87787633',
  ),
  'page_title' => 
  array (
    0 => 'Block_16946416605ea8f1cb9bf838_25769315',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15574907915ea8f1cbbdf9a8_15866682',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16025247325ea8f1cbbe1381_38527328',
  ),
  'page_content' => 
  array (
    0 => 'Block_18785984045ea8f1cbbefcc6_77471200',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4670612785ea8f1cbbf1f10_92368954',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9197919215ea8f1cbbf2904_72323514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19566698165ea8f1cb9be631_87787633', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15574907915ea8f1cbbdf9a8_15866682', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4670612785ea8f1cbbf1f10_92368954', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
