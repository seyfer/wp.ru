{*

*}

<div align="center" class="reg_form">

    <form action="?c=C_User_Reg" method="post" name="user_reg_form">
        <label>Логин*<br/>
        <input type="text" name="login" value="{$login}">
        </label>
        <br/>
        <label>Пароль*<br/>
        <input type="password" name="password" value="">
        </label>
        <br/>
        <label>E-mail*<br/>
        <input type="email" name="email" value="{$email}">
        </label>
        <br/>
        <label>Имя<br/>
        <input type="text" name="name" value="{$name}">
        </label>
        <br/>

        <input type="submit" name="reg_user" value="Зарегистрироваться">
        <input type="reset" name="no_reg_user" value="Отменить">
    </form>
    <p>* обязательные поля</p>
</div>