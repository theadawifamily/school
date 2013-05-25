<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 20:30:39
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88690047850ce2f6f248913-89250243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a357a929bd67dbe1d82f3e746d5db16afa649b7' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/add.tpl',
      1 => 1355687463,
      2 => 'file',
    ),
    '19b22846ccd075b9a6f10202849eb8d3d08a30f6' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/layout.tpl',
      1 => 1355687462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88690047850ce2f6f248913-89250243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce2f6f6dc5d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce2f6f6dc5d')) {function content_50ce2f6f6dc5d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/menus/menus.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/fancybox/jquery.fancybox.css?v=2.1.2" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
js/fancybox/jquery.fancybox.js?v=2.1.3"></script>

 <script>
$(document).ready(function() { 
  $('#menuIcon').click(function(){
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/addNewMenu/',function(data){
          $('#menuForm').html(data);
      });
  }); 
  $('.addSubSubMenu').click(function(){
      var id = $(this).attr('id');
      var parentId = $(this).attr('ref');
      var divId = '#addNewSubSubMenu_'+id;
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/addNewSubSubMenu/',{id:id,parentId:parentId},function(data){
          $(divId).html(data);
      });
  });
  $('.addSubMenu').click(function(){
      var id = $(this).attr('id');
      var divId = '#addNewSubMenu_'+id;
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/addNewSubMenu/',{id:id},function(data){
          $(divId).html(data);
      });
  }); 
  $('.editSubSubMenu').click(function(){
      var id = $(this).attr('id');
      var divId = '#subSubMenuElement_'+id;
      var menuName = $(divId).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/editSubSubMenu/',{menuName:menuName,id:id},function(data){
          $(divId).html(data);
      });
  });
  $('.editSubMenu').click(function(){
      var id = $(this).attr('id');
      var divId = '#subMenuElement_'+id;
      var menuName = $(divId).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/editSubMenu/',{menuName:menuName,id:id},function(data){
          $(divId).html(data);
      });
  });
  $('.editMenu').click(function(){
      var id = $(this).attr('id');
      var divId = '#menuElement_'+id;
      var menuName = $(divId).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/editMenu/',{menuName:menuName,id:id},function(data){
          $(divId).html(data);
      });
  }); 
  $('.deleteMenu').click(function(){
      var id = $(this).attr('id');
      if(confirm('This action will delete your menu'+'\n'+'Continue ?')){
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/deleteMenu/',{id:id},function(data){
        window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/'; 
      });
      }
  });
  $('.deleteSubSubMenu').click(function(){
      var id = $(this).attr('id');
      if(confirm('This action will delete your menu'+'\n'+'Continue ?')){
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/deleteSubSubMenu/',{id:id},function(data){  
        window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/'; 
      });
      }
  });
  $('.deleteSubMenu').click(function(){
      var id = $(this).attr('id');
      if(confirm('This action will delete your menu'+'\n'+'Continue ?')){
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/deleteSubMenu/',{id:id},function(data){  
        window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/'; 
      });
      }
  });
  /* fancy box */
      $('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});
/*end fancy box */
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
                                                
                                                
<div id="error">
<?php echo $_smarty_tpl->tpl_vars['errorNotice']->value;?>
<BR />
<ul>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['message'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['message']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['name'] = 'message';
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['message']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['message']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['message']['total']);
?>
    <li id="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['message']['index']];?>
</li>
<?php endfor; endif; ?>
</ul>
</div>
<div id="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
<div id="menuContent">
    <div id="menuIcon">&nbsp;</div>
    <div id="menuText">Add new menu</div>
    <div id="menuMap"><a class="fancybox fancybox.ajax" href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/showMenuTree/">View menu map</a></div>
    <div id="menuForm"></div>
    <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?> 
        <div class="menuName" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
">
            <img class="addSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/addItemGrid.png">
            <img class="editMenu" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/editGrid.png">
            <img class="deleteMenu" id="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png">
            <span class="menuElement" id="menuElement_<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['element']->value['menuName'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['menuName'];?>
</span>
            <div id="addNewSubMenu_<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"></div>
            <?php  $_smarty_tpl->tpl_vars['subElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subElement']->key => $_smarty_tpl->tpl_vars['subElement']->value){
$_smarty_tpl->tpl_vars['subElement']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['subElement']->value['menuId']==$_smarty_tpl->tpl_vars['element']->value['id']){?>
                 <div class="subMenuName" id="subMenuName_<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
">
                 <img class="addSubSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/addItemGrid.png">
                 <img class="editSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/editGrid.png">
                 <img class="deleteSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png">
                 <span class="menuElement" id="subMenuElement_<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuName'];?>
"><?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuName'];?>
</span>
                 <div id="addNewSubSubMenu_<?php echo $_smarty_tpl->tpl_vars['subElement']->value['subMenuId'];?>
"></div>
                 </div>
                    <?php  $_smarty_tpl->tpl_vars['subSubElement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subSubElement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subSubRelations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subSubElement']->key => $_smarty_tpl->tpl_vars['subSubElement']->value){
$_smarty_tpl->tpl_vars['subSubElement']->_loop = true;
?> 
                        <?php if ($_smarty_tpl->tpl_vars['subSubElement']->value['subMenuId']==$_smarty_tpl->tpl_vars['subElement']->value['subMenuId']){?>
                    <div class="subSubMenuName">
                    <img class="editSubSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/editGrid.png">
                    <img class="deleteSubSubMenu" id="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png">
                    <span class="menuElement" id="subSubMenuElement_<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuId'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>
"><?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subSubMenuName'];?>
</span>
                    <div id="addNewSubSubMenu_<?php echo $_smarty_tpl->tpl_vars['subSubElement']->value['subMenuId'];?>
"></div>
                    </div>
                        <?php }?>
                    <?php } ?>  
                <?php }?>
            <?php } ?> 
            <div class="divider">&nbsp;</div>
        </div>
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