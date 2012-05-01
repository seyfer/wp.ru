{*
шаблон редактора меню
$menu - массив меню
*}

<p>
    <a href="?c=C_Editor">Статьи</a>
    <a href="?c=C_Menu_Editor">Меню</a>
</p>
<hr>

<form name="menu_editor" method="post" action="?c=C_Menu_Editor">
    <ul>
        {foreach from=$menu item=item}
            <li class="editor_menu">
                Название:   <input type="text" value="{$item.ancor}" name="input{$item.id_menu}[ancor]">
                Ссылка:     <input type="text" value="{$item.link}" name="input{$item.id_menu}[link]">
                Сортировка: <input type="text" value="{$item.sort}" name="input{$item.id_menu}[sort]">
                <a href="?c=C_Menu_Editor&up={$item.id_menu}">+</a>
                <a href="?c=C_Menu_Editor&down={$item.id_menu}">-</a>

                <input type="hidden" name="input{$item.id_menu}[id_menu]" value="{$item.id_menu}">
            </li>
        {/foreach}
    </ul>
    <input type="submit" name="save_menu" value="Сохранить">
</form>