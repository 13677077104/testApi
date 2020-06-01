<?php
/* Smarty version 3.1.30, created on 2020-06-01 15:22:23
  from "/home/wwwroot/test_api/public/Views/error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed4acaf424ad8_02169165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaf4c09894afec580c521f1a4777893965e5ac7e' => 
    array (
      0 => '/home/wwwroot/test_api/public/Views/error.html',
      1 => 1489483063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed4acaf424ad8_02169165 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
    <meta charset="utf-8">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #f0f1f3;
        }
        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            width: 854px;
            height: 385px;
            margin-left: -427px;
            margin-top: -196px;
            background-color: #fff;
            border-top: 8px solid #93d9b0;
        }
        .title{
            width: 755px;
            height: 137px;
            margin: 0 auto;
            font-size: 40px;
            font-family: "华文隶书";
            line-height: 200px;
            border-bottom: 1px solid #a7a7a7;
        }
        .word{
            width: 755px;
            height: 216px;
            margin: 33px auto 0px auto;
            font-size: 17px;
            color: #989898;
            font-family: "Adobe 黑体 Std";
            line-height: 27px;
            letter-spacing: 2px;
            word-wrap : break-word;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">
        Something Wrong！
    </div>
    <div class="word">
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</div>
</body>
</html><?php }
}
