{*
Шаблон вывода инфо-блока пользователя
=====================================
$logined - авторизован ли пользователь
$user_name - имя пользователя
*}

{if $logined }
    <div id="user_block">
        Вы вошли как <b>{$user_name}</b>, <a href="index.php?c=C_User_Auth">выйти</a>
    </div>
{else}
    <div id="user_block">Вы неавторизованы, <a href="index.php?c=C_User_Auth">войти</a>
    </div>
{/if}