<?php
/* Smarty version 3.1.31, created on 2017-03-13 14:42:00
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\templates\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6afb85d3fd7_48239123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4389e143e50e0fde60a706f800bb7810d7fe0664' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\templates\\about.tpl',
      1 => 1489414036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6afb85d3fd7_48239123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>About</title>
</head>
<body>
<p>------------------------------------------------------------</p>
<h1>***** Company *****</h1>
<p>------------------------------------------------------------</p>
<div>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['companyDetails']->value;?>
</li><br>
    </ul>
</div>
<p>------------------------------------------------------------</p>
</body>
</html><?php }
}
