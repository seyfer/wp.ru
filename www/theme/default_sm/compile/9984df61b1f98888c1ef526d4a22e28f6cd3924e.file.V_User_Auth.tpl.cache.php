<?php /* Smarty version Smarty-3.1.8, created on 2012-05-04 17:35:38
         compiled from "Z:/home/wp.ru/www/theme/default_sm/template\User\V_User_Auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299564fa3a2ea500814-12075532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9984df61b1f98888c1ef526d4a22e28f6cd3924e' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\User\\V_User_Auth.tpl',
      1 => 1336120596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299564fa3a2ea500814-12075532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
    'remember' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a2ea558191_40400079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a2ea558191_40400079')) {function content_4fa3a2ea558191_40400079($_smarty_tpl) {?>

<h3 align = "center">Авторизация</h3>

<div class="auth_form" align="center">
    <form method="post" name="auth_form" action="?c=C_User_Auth" class="auth_form" >
        <label>
            Логин:&nbsp;
            <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">
        </label>
        <br>
        <label>
            Пароль:
            <input type="password" name="password">
        </label>
        <br>
        <label>
            Запомнить?
            <input type="checkbox" name="remember"
                   <?php if ($_smarty_tpl->tpl_vars['remember']->value){?>
                       checked="true"
                   <?php }?>
                   >
        </label>
        <br>
        <input type="submit" name="authorization">
    </form>
</div><?php }} ?>