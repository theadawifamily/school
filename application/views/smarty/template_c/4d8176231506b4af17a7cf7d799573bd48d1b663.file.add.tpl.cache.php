<?php /* Smarty version Smarty-3.1.6, created on 2012-11-16 17:02:42
         compiled from "/home/www/worksample.net/mypanel/views/users/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119695162650a671b273b233-59960218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d8176231506b4af17a7cf7d799573bd48d1b663' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/users/add.tpl',
      1 => 1353037183,
      2 => 'file',
    ),
    '26abf01d491087f71d3c7e68b44368db72df1c66' => 
    array (
      0 => '/home/www/worksample.net/mypanel/views/layout/layout.tpl',
      1 => 1352741490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119695162650a671b273b233-59960218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50a671b290fdb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a671b290fdb')) {function content_50a671b290fdb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" href="http://www.worksample.net/mypanel/includes/css/cms/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->
    
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/validate/jquery.validity.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
css/validate/users.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="http://www.worksample.net/mypanel/includes/js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
   


 <script src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
js/validate/jQuery.validity.min.js" type="text/javascript"></script>

 <script>
 $(document).ready(function() { 
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
                		<li>
                			<a href="http://www.worksample.net/mypanel/users/add/" class="active"><span class="l"></span><span class="r"></span><span class="t">Users</span></a>
                		</li>
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">Menu Item</span></a>
                			<ul>
                				<li><a href="#">Menu Subitem 1</a>
                					<ul>
                						<li><a href="#">Menu Subitem 1.1</a></li>
                						<li><a href="#">Menu Subitem 1.2</a></li>
                						<li><a href="#">Menu Subitem 1.3</a></li>
                					</ul>
                				</li>
                				<li><a href="#">Menu Subitem 2</a></li>
                				<li><a href="#">Menu Subitem 3</a></li>
                			</ul>
                		</li>		
                		<li>
                			<a href="#"><span class="l"></span><span class="r"></span><span class="t">About</span></a>
                		</li>
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
                                                
                                                
<div>&nbsp;</div>
<form id="form" action = "../submit" method="post">
<label>First Name :</label>
<input id="first" name="first" type="text">
<div>&nbsp;</div>
<label>Last Name :</label>
<input id="last" name="last" type="text">
<div>&nbsp;</div>
<label>Email :</label>
<input id="email" name="email" type="text">
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