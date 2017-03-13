<?php
/* Smarty version 3.1.31, created on 2017-03-13 14:07:22
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6a79a923123_24663707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86f0c68e6ebcbb06a0df4b6800768344fa794c38' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\about.tpl',
      1 => 1489414036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6a79a923123_24663707 (Smarty_Internal_Template $_smarty_tpl) {
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
