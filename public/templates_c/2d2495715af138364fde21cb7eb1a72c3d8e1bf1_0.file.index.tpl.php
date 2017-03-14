<?php
/* Smarty version 3.1.31, created on 2017-03-14 07:53:30
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c7a17aad05d0_83065499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2495715af138364fde21cb7eb1a72c3d8e1bf1' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\templates\\index.tpl',
      1 => 1489478009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7a17aad05d0_83065499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>Employee</title>
</head>
<body>
<p>------------------------------------------------------------</p>
<h1>***** Employee *****</h1>
<p>------------------------------------------------------------</p>
<div>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['userDetails']->value;?>
</li>
        <br>
        <li><?php echo $_smarty_tpl->tpl_vars['user2Details']->value;?>
</li>
        <br>
        <li><?php echo $_smarty_tpl->tpl_vars['user3Details']->value;?>
</li>
    </ul>
</div>
<p>------------------------------------------------------------</p>
</body>
</html><?php }
}
