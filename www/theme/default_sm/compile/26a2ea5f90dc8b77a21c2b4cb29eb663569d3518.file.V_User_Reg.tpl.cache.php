<?php /* Smarty version Smarty-3.1.8, created on 2012-05-10 14:54:18
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\User\V_User_Reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127704fab57d4d5c6a6-42134760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a2ea5f90dc8b77a21c2b4cb29eb663569d3518' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\User\\V_User_Reg.tpl',
      1 => 1336632818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127704fab57d4d5c6a6-42134760',
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fab57d4d7b147_69349150',
  'variables' => 
  array (
    'login' => 0,
    'email' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fab57d4d7b147_69349150')) {function content_4fab57d4d7b147_69349150($_smarty_tpl) {?>

<div align="center" class="reg_form">

    <form action="?c=C_User_Reg" method="post" name="user_reg_form">
        <label>Логин*<br/>
        <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
        </label>
        <br/>
        <label>Пароль*<br/>
        <input type="password" name="password" value="">
        </label>
        <br/>
        <label>E-mail*<br/>
        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
        </label>
        <br/>
        <label>Имя<br/>
        <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
        </label>
        <br/>

        <input type="submit" name="reg_user" value="Зарегистрироваться">
        <input type="reset" name="no_reg_user" value="Отменить">
    </form>
    <p>* обязательные поля</p>
</div><?php }} ?>