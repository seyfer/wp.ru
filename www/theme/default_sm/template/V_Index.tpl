<? /*
Шаблон главной страницы
=======================
$articles - список статей

статья:
id_article - идентификатор
title - заголвок
content - текст
*/ ?>

<ul>   
    {if $articles}
        {foreach from=$articles item=article}
            <li>
                <a href="index.php?c=C_Article&id={$article['id_article']}">
                    {$article['title']}
                </a>
                <p>
                    {$art = $article['id_article']}
                    {$intros[$art]}
                </p>

            </li>
        {/foreach}
    {/if}

</ul>