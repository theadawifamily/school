<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 02:18:10
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/sort.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164529351950ce80e2056985-27322603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f09184255ceede211e5b7a764f1a2baf0e72e6c' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/sort.tpl',
      1 => 1355687464,
      2 => 'file',
    ),
    '19b22846ccd075b9a6f10202849eb8d3d08a30f6' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/layout.tpl',
      1 => 1355687462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164529351950ce80e2056985-27322603',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce80e2370d1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce80e2370d1')) {function content_50ce80e2370d1($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" href="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
css/cms/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuTree.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

 <script>
 $(document).ready(function() { 
 $(function() {
	$('#menuContent').sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable('serialize'); 
            $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/reSort',{order:order,table:'menu'}, function(data){
              alert('Sorted successfully');
              window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/sort/'; 
            }); 														 
            }								  
	});
        $('.subMenuNameId').sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable('serialize'); 
            $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/reSort',{order:order,table:'sub_menu'}, function(data){
              alert('Sorted successfully');
              window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/sort/'; 
            }); 															 
            }								  
	});
       $('.subSubMenuNameId').sortable({ opacity: 0.6, cursor: 'move', update: function() {
            var order = $(this).sortable('serialize');  
            $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/reSort',{order:order,table:'sub_sub_menu'}, function(data){
              alert('Sorted successfully');
              window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/sort/'; 
            }); 															 
            }								  
	});    
    });  
 });
</script>




</head>
<body>

<div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div class="art-header">
                    <div class="art-header-png"></div>
                    <div class="art-header-jpeg"></div>
                    
                </div>
                <div class="art-nav">
                   <?php echo smarty_function_getUserNameSession(array(),$_smarty_tpl);?>

                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
                		<?php echo smarty_function_menu(array(),$_smarty_tpl);?>

                	</ul>
                </div>
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
                            <div class="art-post">
                                <div class="art-post-body">
                            <div class="art-post-inner art-article">
                                           
                                            <div class="art-postcontent">
                                                <!-- article-content -->
                                                
                                                
<div id="menuContent">
    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?> 
        <div class="menuName_<?php echo $_smarty_tpl->tpl_vars['index']->value++;?>
" id="menuElement<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['element']->value['menuOrder'];?>
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
             <div class="subMenuNameId">
            <?php  $_smarty_tpl->tpl_vars['subElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subElement']->key => $_smarty_tpl->tpl_vars['subElement']->value){
$_smarty_tpl->tpl_vars['subElement']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['subElement']->value['menuId']==$_smarty_tpl->tpl_vars['element']->value['id']){?>
                 <div class="subMenuName" id="subMenuElemet<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
_<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuOrder'];?>
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
                
                 <div class="subSubMenuNameId" ref="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
">
                    <?php  $_smarty_tpl->tpl_vars['subSubElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subSubElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subSubRelations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subSubElement']->key => $_smarty_tpl->tpl_vars['subSubElement']->value){
$_smarty_tpl->tpl_vars['subSubElement']->_loop = true;
?> 
                        
                        <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['subMenuId']==$_smarty_tpl->tpl_vars['subElement']->value['subMenuId']){?>
                            <div id="subSubMenuElement<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
_<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuOrder'];?>
" >
                    <div class="subSubMenuName">
                    <span class="menuElement" ref="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>
">
                         <span class="marginText"><?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>

                         <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle']!=''){?>
                            <span class="pageSpacer">Linked to page titled &nbsp;"<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['pageTitle'];?>
"</span>
                            <?php }?>
                         </span>
                     </span>
                    </div>
                         </div>
                        <?php }?>
                        
                    <?php } ?>
                     </div>
                  </div>
                <?php }?>
            <?php } ?>
             </div>
        </div>
       
    <?php if ($_smarty_tpl->tpl_vars['index']->value>6){?>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, 0);?>
    <?php }?>
    <?php } ?>   
</div>

                                                    
                                                <!-- /article-content -->
                                            </div>
                                            <div class="cleared"></div>
                            </div>
                            
                            		<div class="cleared"></div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-footer">
                    <div class="art-footer-t"></div>
                    <div class="art-footer-l"></div>
                    <div class="art-footer-b"></div>
                    <div class="art-footer-r"></div>
                  <div class="art-footer-body">
                        <div class="art-footer-text">
                            <p>Copyright &#169; 2011 ---. All Rights Reserved.</p>
                        </div>
               		  <div class="cleared"></div>
                    </div>
                </div>
        		</div>
        </div>
        </div> 
</body>
</html>
<?php }} ?>