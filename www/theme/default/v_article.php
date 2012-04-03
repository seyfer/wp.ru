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

    <? if ($_GET['id']) : ?>
        <p><?= $article['title'] ?></p>
        <?= $article['content'] ?>
        <br>                       
    <? endif ?>
</ul>