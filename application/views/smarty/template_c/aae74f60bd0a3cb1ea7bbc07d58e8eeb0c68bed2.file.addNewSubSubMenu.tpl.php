<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 02:09:42
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/addNewSubSubMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73205210150ce7ee68d3eb2-83329475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae74f60bd0a3cb1ea7bbc07d58e8eeb0c68bed2' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/addNewSubSubMenu.tpl',
      1 => 1355687464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73205210150ce7ee68d3eb2-83329475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'parentId' => 0,
    'rand' => 0,
    'linkPath' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce7ee69be47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce7ee69be47')) {function content_50ce7ee69be47($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuOperations.css" type="text/css" media="screen" />

 <script>
 $(document).ready(function() { 
   $(".submit").click(function() {
        var title = $('#title').val();
        var id = $('#title').attr('ref');
        var parentId = '<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
';
        var rand = '<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
';
        $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/submitNewSubSubMenu/',{title:title,id:id,parentId:parentId},function(data){
            if(data == 'success'){    
             window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/';
            }
            else{
                $('#newSubMenuError_'+rand).html(data); 
            }
         
      });
   });
 });
</script>

<div id="newMenuDiv"> 
    <div>Sub Sub Menu Name : <input id="title" name="title" type="text" value="" ref="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input class="submit" type="button" value="submit info">
    <span class ="newMenuError" id="newSubMenuError_<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
"></span>
    </div>
</div><?php }} ?>