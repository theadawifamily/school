<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 00:03:13
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/menus/addNewMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204221159750ce6141f254c1-55867376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c4ca63a86d3a840874b85e05fb8bf1bb7d950a' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/menus/addNewMenu.tpl',
      1 => 1355687463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204221159750ce6141f254c1-55867376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scriptPath' => 0,
    'linkPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce614207f49',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce614207f49')) {function content_50ce614207f49($_smarty_tpl) {?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/menus/menuOperations.css" type="text/css" media="screen" />

 <script>
 $(document).ready(function() { 
   $("#submit").click(function() {
        var title = $('#title').val();
        $.post('<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/submitNewMenu/',{title:title},function(data){
            if(data == 'success'){
                
             window.location = '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
menus/add/';
            }
            else{
                $('#newMenuError').html(data); 
            }
         
      });
   });
 });
</script>

<div id="newMenuDiv"> 
    <div><input id="title" name="title" type="text" value="">
    <input id="submit" type="button" value="submit info">
    <span id="newMenuError"></span>
    </div>
</div><?php }} ?>