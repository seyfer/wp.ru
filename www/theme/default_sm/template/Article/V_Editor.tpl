{*
  Шаблон главной страницы
  =======================
  $articles - список статей

  статья:
  id_article - идентификатор
  title - заголвок
  content - текст
 *}

 <p>
     <a href="?c=C_Editor">Статьи</a>
     <a href="?c=C_Menu_Editor">Меню</a>
 </p>
 <hr>

<ul>
    <li>
        <b><a href="index.php?c=C_New">Новая статья</a></b>
    </li>
    {foreach from=$articles item=article}
        <li>
            <a href="index.php?c=C_Edit&id={$article['id_article']}">
                {$article['title']}
            </a>
        </li>
    {/foreach}
</ul>
