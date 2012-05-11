<?php /*%%SmartyHeaderCode:75744fa3a2e7312fa7-34257762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6f62d36ab12d74c691c0c83a43e6b14437ede' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main.tpl',
      1 => 1336123168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75744fa3a2e7312fa7-34257762',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fac8cb1aec8d0_40923505',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fac8cb1aec8d0_40923505')) {function content_4fac8cb1aec8d0_40923505($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Веб Гуру::Редактор меню</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" media="screen"
              href="theme/default_sm/template/style.css" />
    </head>
    <body>
        <div class="main">
            <div id="logo">
                <a href="http://wp.ru/">
                    <img src="
                         theme/default_sm/template/wg.png" />
                </a>
            </div>

            <div class="menu">
                <div class="menu">
                                                            <a href="?c=C_Index" class="
                                              ">Главная</a>
                                                                                    <a href="?c=C_Editor" class="
                                              ">Консоль редактора</a>
                                                            </div>

            </div>

             <div class ="user_block">
                        <div id="user_block">Вы неавторизованы, <a href="index.php?c=C_User_Auth">войти</a>
    </div>

                </div>

            <div class="content">
                                <h3 align = "center">Авторизация</h3>

<div class="auth_form" align="center">
    <form method="post" name="auth_form" action="?c=C_User_Auth" class="auth_form" >
        <label>
            Логин:&nbsp;
            <input type="text" name="login" value="">
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
                                      >
        </label>
        <br>
        <input type="submit" name="authorization">
    </form>
    <br/>
    <a href="index.php">Забыли пароль?</a>
    <a href="?c=C_User_Reg">Регистрация</a>
</div>
            </div>
        </div>


        <p id="copyright"><a href=http://wp.ru/>
                cms.me
            </a> &copy;</p>

    </body>
</html><?php }} ?>