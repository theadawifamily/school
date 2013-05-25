<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 01:02:24
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/pages/showMyPages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153985620150ce6f20312ee8-42868453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c3538a5125234dce23d00fc9b3343ad8401214' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/pages/showMyPages.tpl',
      1 => 1355687466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153985620150ce6f20312ee8-42868453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'pageId' => 0,
    'linkPath' => 0,
    'myPageTitle' => 0,
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
  'unifunc' => 'content_50ce6f204e7a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce6f204e7a6')) {function content_50ce6f204e7a6($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuTree.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

    <script>
    $(document).ready(function(){
        $('.pageIcon').click(function(){
           var id = $(this).attr('id');
           var table = $(this).attr('ref');
           var pageId = '<?php echo $_smarty_tpl->tpl_vars['pageId']->value;?>
';
           $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/addLink/',{id:id,table:table,pageId:pageId},function(data){
               alert(data);
               window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/edit/';
            });
        });
        $('.removeLink').click(function(){
           var id = $(this).attr('id');
           var table = $(this).attr('ref');
           $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/removeLink/',{id:id,table:table},function(data){
               alert(data);
               window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/edit/';
            });
        });
    });
    </script>

<div id="menuContent">
    <div id="title">Please click on the desired menu to link it to page "<?php echo $_smarty_tpl->tpl_vars['myPageTitle']->value;?>
"</div>
    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?> 
        <div class="menuName_<?php echo $_smarty_tpl->tpl_vars['index']->value++;?>
" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['element']->value['parent']=='no'){?>
                <div class="menuElement"><img class="pageIcon" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"
                    ref="menu" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/pages/page.png">
                    <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['element']->value['menuName'];?>

                       <?php if ($_smarty_tpl->tpl_vars['element']->value['pageTitle']!=''){?>
                           <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['element']->value['pageTitle'];?>
"</span>
                           <span class="removeLink" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" ref="menu">Remove this link</span>
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
                            <img class="pageIcon" id="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" 
                            ref="sub_menu" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/pages/page.png">
                            <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuName'];?>

                            <?php if ($_smarty_tpl->tpl_vars['subElement']->value['pageTitle']!=''){?>
                            <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['subElement']->value['pageTitle'];?>
"</span>
                            <span class="removeLink" id="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" ref="sub_menu">Remove this link</span>
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
                    <img class="pageIcon" id="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" 
                     ref="sub_sub_menu" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/pages/page.png">  
                         <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>

                         <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle']!=''){?>
                            <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle'];?>
"</span>
                            <span class="removeLink" id="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" ref="sub_sub_menu">Remove this link</span>
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