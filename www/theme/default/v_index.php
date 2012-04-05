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
    
        <? foreach ($articles as $article): ?>
            <li>
                <a href="article.php?id=<?= $article['id_article'] ?>">
                    <?= $article['title'] ?>
                </a>
                <p>
                    <? $art = $article['id_article']; ?>
                    <?= $intros[$art] ?>
                </p>

            </li>
        <? endforeach ?>
   
   
</ul>
