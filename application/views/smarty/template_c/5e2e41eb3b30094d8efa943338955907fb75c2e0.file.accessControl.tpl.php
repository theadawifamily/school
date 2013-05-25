<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 20:21:52
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/groups/accessControl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136689808850ce2d60714427-53582558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e2e41eb3b30094d8efa943338955907fb75c2e0' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/groups/accessControl.tpl',
      1 => 1355687460,
      2 => 'file',
    ),
    '19b22846ccd075b9a6f10202849eb8d3d08a30f6' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/layout.tpl',
      1 => 1355687462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136689808850ce2d60714427-53582558',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce2d6095123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce2d6095123')) {function content_50ce2d6095123($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/groups/accesscontrol.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    

 <script>
 $(document).ready(function() { 
   $('.groups').click(function(){
       var id = '#sub_'+$(this).attr('id');
       $('.folders').hide();
       $(id).show();
   });
   $('.folderName').click(function(){
      var name = $(this).attr('name');
      var divId = '#subFolder_'+$(this).attr('id');
      var groupId = $(this).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/displayFolders',{name:name,divId:divId,groupId:groupId},function(data){
          $(divId).html(data);
      });
   });
   $('.folderName2').click(function(){
      var name = $(this).attr('name');
      var divId = '#subFolder_'+$(this).attr('id');
      var dir = $(this).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/displayFolders',{name:dir,divId:divId},function(data){
          $(divId).css({'margin-left':'25px'});
          $(divId).html(data);
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
                                                
                                                

<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?> 
     <div class="groups" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['group_name'];?>
</div>
     <div class="folders" id="sub_<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">
     <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?> 
        <div class="folderName" name="<?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
</div>
        <div id="subFolder_<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"></div>
    <?php } ?>
     </div>
    
<?php } ?>



                                                    
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