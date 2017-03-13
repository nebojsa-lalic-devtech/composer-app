<?php
/* Smarty version 3.1.31, created on 2017-03-13 14:42:07
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\templates\project.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6afbf416255_40997350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0237aa18e0f61efe69e463f8c57f7d283258f341' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\templates\\project.tpl',
      1 => 1489414400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6afbf416255_40997350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>Project</title>
</head>
<body>
<p>------------------------------------------------------------</p>
<h1>***** Project *****</h1>
<p>------------------------------------------------------------</p>
<div>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['projectDetails']->value;?>
</li><br>
    </ul>
</div>
<p>------------------------------------------------------------</p>
</body>
</html><?php }
}
