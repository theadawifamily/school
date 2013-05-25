<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 22:08:29
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/pages/showPageAssignment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42727505450ce465d833760-66266292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b8ba3584be1f143f56744faf75a4f783df68365' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/pages/showPageAssignment.tpl',
      1 => 1355687466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42727505450ce465d833760-66266292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'data' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce465d89b9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce465d89b9e')) {function content_50ce465d89b9e($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/pageAssignment.css" type="text/css" media="screen" />
<div id="menuContent">
    <?php if ($_smarty_tpl->tpl_vars['data']->value){?>
    <div id="title">Your page is linked to the following menus :</div>
    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?> 
    <div class="pageSpacer"><?php echo $_smarty_tpl->tpl_vars['element']->value['menu'];?>
</div> 
    <?php } ?>
    <?php }else{ ?>
    <div id="noTitle">Your page is not linked to any menus</div>
    <?php }?>
</div>
<?php }} ?>