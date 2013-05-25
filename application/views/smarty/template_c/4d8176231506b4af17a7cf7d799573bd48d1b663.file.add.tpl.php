<?php /* Smarty version Smarty-3.1.6, created on 2012-11-28 00:19:11
         compiled from "/home/www/worksample.net/mypanel/views/users/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159845467950a67202f2ff33-88563325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d8176231506b4af17a7cf7d799573bd48d1b663' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/users/add.tpl',
      1 => 1354055807,
      2 => 'file',
    ),
    '26abf01d491087f71d3c7e68b44368db72df1c66' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/layout/layout.tpl',
      1 => 1354055799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159845467950a67202f2ff33-88563325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50a672031c26c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a672031c26c')) {function content_50a672031c26c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    function emailExists(){
       var target = $("#email").val(); 
	$.ajax({
                        type: 'POST',
                        url: '<?php echo $_smarty_tpl->tpl_vars['linkPath']->value;?>
users/checkEmail',
                        async: false,
                        data: {
                            target:target
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
        $("#first")
          .require('You must provide your first name')
          .match(/^[a-zA-Z]+$/, "First name must contain characters only");
         
        $("#last")
          .require('You must provide your last name')
           .match(/^[a-zA-Z]+$/, "Last name must contain characters only");
              
        $("#email")
        .require('You must provide your email addrees')
        .match("email");
            
         $("#password")
        .require()
        .minLength(6, "Your password must bemore than 5 characters long.");
        
        $("#password2,#password").equal("Passwords do not match.");
       
       $("#email").assert(
            emailExists, 
            "email exists."
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
<label>First Name :</label>
<input id="first" name="first" type="text" value="<?php echo $_smarty_tpl->tpl_vars['first']->value;?>
">
<div>&nbsp;</div>
<label>Last Name :</label>
<input id="last" name="last" type="text" value="<?php echo $_smarty_tpl->tpl_vars['last']->value;?>
">
<div>&nbsp;</div>
<label>Email :</label>
<input id="email" name="email" type="text" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
<div>&nbsp;</div>
<label>Password :</label>
<input id="password" name="password" type="password">
<div>&nbsp;</div>
<label>Confirm Password :</label>
<input id="password2" name="password2" type="password">
<div>&nbsp;</div>
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