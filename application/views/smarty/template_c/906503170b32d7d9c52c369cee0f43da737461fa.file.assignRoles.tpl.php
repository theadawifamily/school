<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 20:29:10
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/users/assignRoles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8932955250ce2f160a4859-44760025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906503170b32d7d9c52c369cee0f43da737461fa' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/users/assignRoles.tpl',
      1 => 1355687467,
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
  'nocache_hash' => '8932955250ce2f160a4859-44760025',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce2f1640cdb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce2f1640cdb')) {function content_50ce2f1640cdb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
users/searchPriv/">
<div>Search by name and/or email adress :</div>
<div>&nbsp;</div>
<label>Name :</label>
<input class="searchInputs" id="name" name="name" type="text" autocomplete="off">
<label>Email :</label>
<input class="searchInputs" id="email" name="email" type="text" autocomplete = "off">
<div id="searchResults"></div>
</div>
 
<?php if ($_smarty_tpl->tpl_vars['results']->value){?>
<div>&nbsp;</div>
<?php if ($_smarty_tpl->tpl_vars['status']->value=='1'){?>
<div id="success">Your data has been updated successfully</div>
<div>&nbsp;</div>
<?php }?>


    <script>
    $(document).ready(function() { 
        $('.group_name').click(function(){
            var id = $(this).val();
            var group = "input:checkbox[name='"+$(this).attr("name")+"']";
            if(this.checked){
            $(group).attr("checked",false);
            $(this).attr("checked",true);
            $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/addPriv/',{id:id},function(data){
               
             });
            }
            else{
            $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/removePriv/',{id:id},function(data){
                
             }); 
            }
        });

      });
    </script>

<div>
    <table class="gridContainer">
        <tr class="bgColor">
             <td class="point"><div class ="header" id="ORDER BY first_name" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/assignRoles/sort/">Full Name </div></td>
             <td class="point"><div class ="header" id="ORDER BY email" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/assignRoles/sort/">Email</div></td>
             <td>&nbsp;</td>
        </tr>
        
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?> 
    <tr>
        <td><div class="data"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</div></td>
        <td><div class="data"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div></td>
        <td>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?> 
            <div class="seperate">
                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="group_name" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" <?php echo smarty_function_check(array('key'=>$_smarty_tpl->tpl_vars['user']->value['id'],'value'=>$_smarty_tpl->tpl_vars['value']->value['id']),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['group_name'];?>
</div>
            <?php } ?>
        </td>
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
users/assignRoles/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" id="myCurrentPages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
    <?php }else{ ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/assignRoles/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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