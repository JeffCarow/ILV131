<?php /* Smarty version Smarty-3.0.4, created on 2015-05-21 15:26:27
         compiled from "C:/xampp/htdocs/setup/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9675555ddd0351b9c2-49137948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c40bae5a871f3dd624813ed2018e8bd8c5a71a6b' => 
    array (
      0 => 'C:/xampp/htdocs/setup/templates/header.tpl',
      1 => 1432213542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9675555ddd0351b9c2-49137948',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo $_smarty_tpl->getVariable('app_name')->value;?>
 <?php echo $_smarty_tpl->getVariable('app_version')->value;?>
 &raquo; <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['install']) ? $_smarty_tpl->getVariable('_lang')->value['install'] : null);?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/text.css" />
    <link rel="stylesheet" type="text/css" media="all" href="assets/css/960.css" />

    <link rel="stylesheet" href="assets/modx.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print" />
    
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />
    <?php if ((isset($_smarty_tpl->getVariable('_lang')->value['additional_css']) ? $_smarty_tpl->getVariable('_lang')->value['additional_css'] : null)!=''){?>
    <style type="text/css"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['additional_css']) ? $_smarty_tpl->getVariable('_lang')->value['additional_css'] : null);?>
</style>
    <?php }?>
    <script type="text/javascript" src="assets/js/ext-core.js"></script>
    <script type="text/javascript" src="assets/js/modx.setup.js"></script>
    <!--[if lt IE 7]>
    
        <script type="text/javascript" src="assets/js/inc/say.no.to.ie.6.js"></script>
        <style type="text/css">
        body {
            behavior:url("assets/js/inc/csshover2.htc");
        }
        .pngfix {
            behavior:url("assets/js/inc/iepngfix.htc");
        }
        </style>
        
    <![endif]-->
    
</head>

<body>
<!-- start header -->
<div id="header">
    <div class="container_12">
        <div id="metaheader">
            <div class="grid_6">
                <div id="mainheader">
                    <h1 id="logo" class="pngfix"><span>MODX</span></h1>
                </div>
            </div>
            <div id="metanav" class="grid_6">
<a href="#"><strong><?php echo $_smarty_tpl->getVariable('app_name')->value;?>
</strong>&nbsp;<em><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['version']) ? $_smarty_tpl->getVariable('_lang')->value['version'] : null);?>
 <?php echo $_smarty_tpl->getVariable('app_version')->value;?>
</em></a>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
    </div>
</div>
<!-- end header -->

<div id="contentarea">
    <div class="container_16">
       <!-- start content -->
        <div id="content" class="grid_12">

        