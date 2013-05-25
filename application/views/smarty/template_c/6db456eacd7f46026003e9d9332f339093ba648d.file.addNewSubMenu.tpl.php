<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 00:27:00
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/addNewSubMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76810865850ce66d43f6940-89725102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db456eacd7f46026003e9d9332f339093ba648d' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/addNewSubMenu.tpl',
      1 => 1355687464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76810865850ce66d43f6940-89725102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'rand' => 0,
    'linkPath' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce66d44e0f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce66d44e0f0')) {function content_50ce66d44e0f0($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuOperations.css" type="text/css" media="screen" />

 <script>
 $(document).ready(function() { 
   $(".submit").click(function() {
        var title = $('#title').val();
        var id = $('#title').attr('ref');
        var rand = '<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
';
        $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/submitNewSubMenu/',{title:title,id:id},function(data){
            if(data == 'success'){
                
             window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/';
            }
            else{
                $('#newMenuError_'+rand).html(data); 
            }
         
      });
   });
 });
</script>

<div id="newMenuDiv"> 
    <div>Sub Menu Name : <input id="title" name="title" type="text" value="" ref="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input class="submit" type="button" value="submit info">
    <span class ="newMenuError" id="newMenuError_<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
"></span>
    </div>
</div><?php }} ?>