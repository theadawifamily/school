<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 22:09:34
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/showMenuTree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188069896750ce469e486831-94688896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0536db09e54dccd08a68456820789a62de5b3215' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/showMenuTree.tpl',
      1 => 1355687464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188069896750ce469e486831-94688896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'menus' => 0,
    'index' => 0,
    'element' => 0,
    'relations' => 0,
    'subElement' => 0,
    'subSubRelations' => 0,
    'subSubElement' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce469e64131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce469e64131')) {function content_50ce469e64131($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuTree.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<div id="menuContent">
    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?> 
        <div class="menuName_<?php echo $_smarty_tpl->tpl_vars['index']->value++;?>
" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['element']->value['parent']=='no'){?>
                <div class="menuElement">
                    <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['element']->value['menuName'];?>

                       <?php if ($_smarty_tpl->tpl_vars['element']->value['pageTitle']!=''){?>
                           <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['element']->value['pageTitle'];?>
"</span>
                       <?php }?>
                       </span>
                </div>
            <?php }else{ ?>
                <div class="menuElement"><?php echo $_smarty_tpl->tpl_vars['element']->value['menuName'];?>
</div>
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars['subElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subElement']->key => $_smarty_tpl->tpl_vars['subElement']->value){
$_smarty_tpl->tpl_vars['subElement']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['subElement']->value['menuId']==$_smarty_tpl->tpl_vars['element']->value['id']){?>
                 <div class="subMenuName" id="subMenuName_<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
">
                     <?php if ($_smarty_tpl->tpl_vars['subElement']->value['parent']=='no'){?>
                        <div class="subMenuElement">
                            <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuName'];?>

                            <?php if ($_smarty_tpl->tpl_vars['subElement']->value['pageTitle']!=''){?>
                            <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['subElement']->value['pageTitle'];?>
"</span>
                            <?php }?>
                            </span>
                        </div>
                     <?php }else{ ?>
                        <div class="subMenuElement"><?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuName'];?>
</div>
                     <?php }?>
                 </div>
                    <?php  $_smarty_tpl->tpl_vars['subSubElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subSubElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subSubRelations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subSubElement']->key => $_smarty_tpl->tpl_vars['subSubElement']->value){
$_smarty_tpl->tpl_vars['subSubElement']->_loop = true;
?> 
                        <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['subMenuId']==$_smarty_tpl->tpl_vars['subElement']->value['subMenuId']){?>
                    <div class="subSubMenuName">
                    <span class="menuElement" id="subSubMenuElement_<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>
">
                         <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>

                         <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle']!=''){?>
                            <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle'];?>
"</span>
                            <?php }?>
                         </span>
                     </span>
                    </div>
                        <?php }?>
                    <?php } ?>  
                <?php }?>
            <?php } ?> 
        </div>
       
    <?php if ($_smarty_tpl->tpl_vars['index']->value>6){?>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, 0);?>
    <?php }?>
    <?php } ?>   
</div>
<?php }} ?>