{*
шаблон главного меню
$menu - список пунктов меню
$menu_active - активный пункт
$item.show_m - показывать пункт меню или нет
*}

<div class="menu">
    {if $menu}
        {foreach from=$menu item=item}
            {if $item.show_m}
                {if $item.link == C_User_Auth}
                    {if $logined == null}
                        <a href="?c={$item.link}" class="
                           {if $item.sort == $menu_active}
                               active
                           {/if}
                           ">{$item.ancor}</a>
                    {/if}

                {else}
                    <a href="?c={$item.link}" class="
                       {if $item.sort == $menu_active}
                           active
                       {/if}
                       ">{$item.ancor}</a>
                {/if}
            {/if}
        {/foreach}
    {/if}
</div>
