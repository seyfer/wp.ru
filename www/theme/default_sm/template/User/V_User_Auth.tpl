{*
форма авторизации пользователя

*}

<h3 align = "center">Авторизация</h3>

<div class="auth_form" align="center">
    <form method="post" name="auth_form" action="?c=C_User_Auth" class="auth_form" >
        <label>
            Логин:&nbsp;
            <input type="text" name="login" value="{$login}">
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
                   {if $remember}
                       checked="true"
                   {/if}
                   >
        </label>
        <br>
        <input type="submit" name="authorization">
    </form>
    <br/>
    <a href="index.php">Забыли пароль?</a>
    <a href="?c=C_User_Reg">Регистрация</a>
</div>