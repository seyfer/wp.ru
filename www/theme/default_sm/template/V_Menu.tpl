{*
шаблон главного меню
$menu - список пунктов меню
$menu_active - активный пункт
*}

<div class="menu">
    {if $menu}
        {foreach from=$menu item=item}
            <a href="?c={$item.link}" class="
               {if $item.sort == $menu_active}
                   active
               {/if}
               ">{$item.ancor}</a>
        {/foreach}
    {/if}
</div>