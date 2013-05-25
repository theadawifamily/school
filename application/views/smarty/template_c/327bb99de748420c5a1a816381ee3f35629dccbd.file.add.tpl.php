<?php /* Smarty version Smarty-3.1.6, created on 2012-12-17 01:02:19
         compiled from "/home/www/worksample.net/ittehad/mypanel/views/pages/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81707925350ce6f1b0bd487-11896828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327bb99de748420c5a1a816381ee3f35629dccbd' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/pages/add.tpl',
      1 => 1355687466,
      2 => 'file',
    ),
    'fec96cd836d04c38867d25986b741d295425c0a8' => 
    array (
      0 => '/home/www/worksample.net/ittehad/mypanel/views/layout/ckadd.tpl',
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
  'nocache_hash' => '81707925350ce6f1b0bd487-11896828',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_50ce6f1b3bd76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ce6f1b3bd76')) {function content_50ce6f1b3bd76($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/layout/ckadd.css" type="text/css" media="screen" />

    
    <script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
js/cms/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    
<script src="<?php echo $_smarty_tpl->tpl_vars['scriptPath']->value;?>
js/validate/jQuery.validity.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/adapters/jquery.js"></script>
  
    

 <script>
 $(document).ready(function() { 
   var config = {
            toolbar:
            [
                ['NewPage','Preview'],
				['Cut','Copy','Paste','PasteText','PasteFromWord','-','Scayt'],
				['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
				['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
				'/',
				['Styles','Format','TextColor','BGColor'],
				['Bold','Italic','Strike'],
				['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
				['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
				['Link','Unlink','Anchor'],
				['Maximize','-','About']
            ]
			
        }; 
    config.width = '900px';     
    config.filebrowserBrowseUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = '<?php echo smarty_function_get_include_path(array(),$_smarty_tpl);?>
ckeditor/kcfinder/upload.php?type=flash';
    $('#editor1').ckeditor(config);
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
<div  class="messageContnt" id="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
<div>&nbsp;</div>


 <script>
 
 $(document).ready(function() { 
    $("form").validity(function() {
        $("#title")
          .require('You must provide a title for your page');
      });
     $('#submit').click(function(){
       var editor = $('#editor1').ckeditorGet();
       var ckData = editor.getData();
       var ckDataStripped = ($(ckData).text());
       if(ckDataStripped == ''){
       $('#ckFrame').css({'border':'5px solid #FF0000'});
        return false   
       }
       else{
       $('#ckFrame').css({'border':'0'});
        return true;       
       }
    });
 });

</script>

<form id="form" action = "" method="post">
<label>Page title :</label>
<input id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
">
<div>&nbsp;</div>
<div id="ckFrame">
<textarea id="editor1" name="pageContent"><?php echo $_smarty_tpl->tpl_vars['pageContent']->value;?>
</textarea>
</div>
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