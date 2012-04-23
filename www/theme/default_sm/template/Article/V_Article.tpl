<? /*
  Шаблон одной статьи
  =======================
  $article - массив статьи

  статья:
  id_article - идентификатор
  title - заголвок
  content - текст
 */ ?>
 
<ul>	
   
    {if $smarty.get.id}
        <h3>{$article['title']}</h3>
        <br>
        <p>
            {$article['content']}
        </p>                    
    {/if}

</ul>