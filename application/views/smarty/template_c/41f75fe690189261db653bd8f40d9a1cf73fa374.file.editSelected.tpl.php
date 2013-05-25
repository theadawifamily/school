<?php /* Smarty version Smarty-3.1.6, created on 2012-11-27 23:44:48
         compiled from "/home/www/worksample.net/mypanel/views/groups/editSelected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17355215950b5335432d3b7-44544515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f75fe690189261db653bd8f40d9a1cf73fa374' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/groups/editSelected.tpl',
      1 => 1354059828,
      2 => 'file',
    ),
    '26abf01d491087f71d3c7e68b44368db72df1c66' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/layout/layout.tpl',
      1 => 1354055799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17355215950b5335432d3b7-44544515',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50b533544c0d9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b533544c0d9')) {function content_50b533544c0d9($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/validate/jquery.validity.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/validate/users.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    
 <script src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
js/validate/jQuery.validity.min.js" type="text/javascript"></script>

 <script>
 
 $(document).ready(function() { 
   c = false;
    function itemExistsEdit(){
       var target = $("#group_name").val();
       var id = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
	$.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
groups/checkItemEdit',
                        async: false,
                        data: {
                            target:target,id:id
                        },
                        success: function(r){
                           if(r.flag == '1'){
			 c = 0;
			}
			 if(r.flag == '0'){
			c = 1;
			}


                        },
                        dataType: 'json'
                    });
                       
	return c;
           
    }
    $("form").validity(function() {
        $("#group_name")
          .require('You must provide a group name')
          .match(/^[a-zA-Z]+$/, "First name must contain characters only");
         
       $("#group_name").assert(
            itemExistsEdit, 
            "group exists."
        );
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
<div>&nbsp;</div>
<form id="form" action = "" method="post">
<label>Group Name :</label>
<input id="group_name" name="group_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
">
<div>&nbsp;</div>
<input id="id" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<input id="currentPage" name="currentPage" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
">
<input id="submit" type="submit" value="submit info">
</form>

                                                    
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