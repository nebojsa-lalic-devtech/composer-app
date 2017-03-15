<?php
/* Smarty version 3.1.31, created on 2017-03-14 08:15:23
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\templates\404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c7a69b216bd1_99782696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b3bc084a89148de237c9191483e464c1aa15c5' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\templates\\404.tpl',
      1 => 1489478009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c7a69b216bd1_99782696 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>404 Error</title>
</head>
<body>
<p>------------------------------------------------------------</p>
<h1>***** 404 Error *****</h1>
<p>------------------------------------------------------------</p>
<div>
    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</li>
        <br>
    </ul>
</div>
<p>------------------------------------------------------------</p>
</body>
</html><?php }
}
