<?php
/* Smarty version 3.1.31, created on 2017-03-13 13:40:08
  from "C:\Users\nebojsa.lalic\Desktop\Composer Repository\composer-app\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c6a138794ee1_36482470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63fb40741b63a633e7bae1c89d3d40a829985b39' => 
    array (
      0 => 'C:\\Users\\nebojsa.lalic\\Desktop\\Composer Repository\\composer-app\\public\\index.tpl',
      1 => 1489412407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6a138794ee1_36482470 (Smarty_Internal_Template $_smarty_tpl) {
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
</li><br>
            <li><?php echo $_smarty_tpl->tpl_vars['user2Details']->value;?>
</li><br>
            <li><?php echo $_smarty_tpl->tpl_vars['user3Details']->value;?>
</li>
        </ul>
    </div>
    <p>------------------------------------------------------------</p>
</body>
</html><?php }
}
