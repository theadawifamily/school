<?php /* Smarty version Smarty-3.1.6, created on 2012-11-27 22:38:08
         compiled from "/home/www/worksample.net/mypanel/views/users/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143443457050b2f9458ea3f5-65900822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2862361a13f1e5caa8aa486c6cb03dc43e96419' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/users/search.tpl',
      1 => 1354055808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143443457050b2f9458ea3f5-65900822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50b2f9459ba91',
  'variables' => 
  array (
    'currentPage' => 0,
    'results' => 0,
    'scriptPath' => 0,
    'linkPath' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b2f9459ba91')) {function content_50b2f9459ba91($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

 <script>
 
 $(document).ready(function() { 
   
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
   
   $('#close').click(function(){
     $('#searchResults').fadeOut();
   });
 });

</script>

<div>&nbsp;</div>
<?php if ($_smarty_tpl->tpl_vars['results']->value){?>
    <table class="gridContainer">
        <tr class="bgColor">
            <td colspan="4"><div id="close"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png"></div></td>
        </tr>
         <tr class="bgColorChild">
             <td><div class ="header" id="ORDER BY first_name" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/edit/sort/">Full Name </div></td>
             <td><div class ="header" id="ORDER BY email" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/edit/sort/">Email</div></td>
             <td><div class ="header">Edit</div></td>
             <td><div class ="header">Delete</div></td>
        </tr>
   
<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?> 
     <tr class="infoBorder">
        <td><div class="data"><?php echo $_smarty_tpl->tpl_vars['r']->value['first_name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['r']->value['last_name'];?>
</div></td>
        <td><div class="data"><?php echo $_smarty_tpl->tpl_vars['r']->value['email'];?>
</div></td>
        <td><div class="editGrid" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/editSelected/id/"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/editGrid.png"></div></td>
        <td><div class="deleteGrid" id="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" ref="<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/deleteSelected/id/"><img src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
images/validate/deleteGrid.png"></div></td>
    </tr>
     
<?php } ?>
     </table>
<?php }else{ ?>
    <div>Unable to find a match</div>
<?php }?><?php }} ?>