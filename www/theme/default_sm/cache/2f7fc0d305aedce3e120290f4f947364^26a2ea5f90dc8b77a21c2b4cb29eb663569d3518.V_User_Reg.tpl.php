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
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fac8cc6b966e7_47732048',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fac8cc6b966e7_47732048')) {function content_4fac8cc6b966e7_47732048($_smarty_tpl) {?>
<div align="center" class="reg_form">

    <form action="?c=C_User_Reg" method="post" name="user_reg_form">
        <label>Логин*<br/>
        <input type="text" name="login" value="">
        </label>
        <br/>
        <label>Пароль*<br/>
        <input type="password" name="password" value="">
        </label>
        <br/>
        <label>E-mail*<br/>
        <input type="email" name="email" value="">
        </label>
        <br/>
        <label>Имя<br/>
        <input type="text" name="name" value="">
        </label>
        <br/>

        <input type="submit" name="reg_user" value="Зарегистрироваться">
        <input type="reset" name="no_reg_user" value="Отменить">
    </form>
    <p>* обязательные поля</p>
</div><?php }} ?>