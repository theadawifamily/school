<?php /* Smarty version Smarty-3.1.6, created on 2012-12-16 20:21:55
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/groups/displayFolders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90790691650ce2d63cc5bc9-02432242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea4dfc732e8f0504b68098830e546eff9dee1cb' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/groups/displayFolders.tpl',
      1 => 1355687460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90790691650ce2d63cc5bc9-02432242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'linkPath' => 0,
    'folders' => 0,
    'groupId' => 0,
    'parentFolder' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce2d63db018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce2d63db018')) {function content_50ce2d63db018($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/groups/accesscontrol.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

 <script>
 $(document).ready(function() { 
     
   $('.myCheckBox').click(function(){
      var name = $(this).attr('id');
      var target = $(this).attr('ref');
      if(this.checked){
      $("input[name="+target+"]").attr('checked','checked');
         $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/assignClassMandatory',{name:name},function(data){
         
          });
      }
      else{
       $("input[name="+target+"]").removeAttr('checked');
           $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/removeClassMandatory',{name:name},function(data){
          
          });
      }
   });   
   $('.myMethods').click(function(){
      var controllerMethod = $(this).attr('id');
      if(this.checked){  
           $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/addSingleClassMandatory',{controllerMethod:controllerMethod},function(data){
          
          });
      }
      else{
         $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/removeSingleClassMandatory',{controllerMethod:controllerMethod},function(data){
          
          }); 
      }
   });
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
      var groupId = $(this).attr('name');
      var divId = '#subFolder_'+$(this).attr('id');
      var dir = $(this).attr('ref');
      $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/displayFolders',{name:dir,divId:divId,groupId:groupId},function(data){
          $(divId).css({'margin-left':'25px'});
          $(divId).html(data);
      });
   });
 });

</script>


<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['folders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
   <div class="folderName2" name="<?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
" ref="<?php echo $_smarty_tpl->tpl_vars['parentFolder']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
</div>
   <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_checkBox(array('name'=>$_tmp1,'groupId'=>$_tmp2),$_smarty_tpl);?>
<div id="subFolder_<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
"></div>
   <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['name']->value['file'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['groupId']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_getClassMethods(array('name'=>$_tmp3,'groupId'=>$_tmp4),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>