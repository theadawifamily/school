<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 22:08:23
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/pages/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86190315350ce46574d9aa5-35721171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17c619fd2ca29595941837ee289d175a9a5914d' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/pages/edit.tpl',
      1 => 1355687466,
      2 => 'file',
    ),
    '5cb920d385d857db80592178b7dc8503a02987fd' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/editTemplate.tpl',
      1 => 1355687462,
      2 => 'file',
    ),
    '19b22846ccd075b9a6f10202849eb8d3d08a30f6' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/layout.tpl',
      1 => 1355687462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86190315350ce46574d9aa5-35721171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce465785c0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce465785c0b')) {function content_50ce465785c0b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" href="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
css/cms/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    
<link rel="stylesheet" href="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
css/validate/jquery.validity.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
css/validate/users.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
css/validate/editUsers.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    

 <script>
 $(document).ready(function() { 
   $('tr:odd').css('background-color', '#A5B4C7');
   $('.searchInputs').keyup(function(){
       $('#searchResults').fadeIn();
       var name = $('#name').val();
       var email = $('#email').val();
       var loc = $('#search').attr('ref');
       $.post(loc,{name:name,email:email},function(data){
           $('#searchResults').html(data);
       });
   });  
       
   $('.editGrid').click(function(){
       var id = $(this).attr('id');
       var loc = $(this).attr('ref');
       window.location = loc+id+'/current/'+'<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
   });
   
   $('.deleteGrid').click(function(){
       var id = $(this).attr('id');
       var loc = $(this).attr('ref');
       if(confirm('This action will delete your record'+'\n'+'Do you wish to continue ?')){
       window.location = loc+id+'/current/'+'<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
';
       }
   });
       
   $('.header').click(function(){
       var id = $(this).attr('id');
       var loc = $(this).attr('ref');
       window.location = loc+id;
   });
   
   $('.point').hover(
        function () {
          $(this).addClass('hover');
        }, 
        function () {
          $(this).removeClass('hover');
        }
    );
   
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
                                                
                                                

<div id="search" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/search/">
<div>Search by page title :</div>
<div>&nbsp;</div>
<label>Page Title :</label>
<input class="searchInputs" id="name" name="name" type="text" autocomplete="off">
<div id="searchResults"></div>
</div>
 
<?php if ($_smarty_tpl->tpl_vars['results']->value){?>
<div>&nbsp;</div>
<?php if ($_smarty_tpl->tpl_vars['status']->value=='1'){?>
<div id="success">Your data has been updated successfully</div>
<div>&nbsp;</div>
<?php }?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/fancybox/jquery.fancybox.css?v=2.1.2" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
js/fancybox/jquery.fancybox.js?v=2.1.3"></script>

<script>
$(document).ready(function(){
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

<div>
    <table class="gridContainer">
        <tr class="bgColor">
             <td class="point"><div class ="header" id="ORDER BY page_title" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/edit/sort/">Page Title : </div></td>
             <td><div class ="header">Link to menu</div></td>
             <td><div class ="header">Edit</div></td>
             <td><div class ="header">Delete</div></td>
        </tr>
   
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?> 
    <tr>
        <td><div class="data"><a class="fancybox fancybox.ajax" href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/showPageAssignment/pageId/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['page_title'];?>
</a></div></td>
        <td><div class ="editGridAjax"><a class="fancybox fancybox.ajax" href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/showMyPages/pageId/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/link.png"></a></div></td>
        <td><div class="editGrid" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/editSelected/id/"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/editGrid.png"></div></td>
        <td><div class="deleteGrid" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/deleteSelected/id/"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png"></div></td>
    </tr>
     
<?php } ?>
     </table>
</div>


<div class="footer">
<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lastPage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?> 
    <?php if ($_smarty_tpl->tpl_vars['currentPage']->value==$_smarty_tpl->tpl_vars['page']->value){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/edit/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" id="myCurrentPages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
    <?php }else{ ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
pages/edit/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
    <?php }?>
<?php } ?>
</div>

<?php }else{ ?>
    No data found
<?php }?>


                                                    
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