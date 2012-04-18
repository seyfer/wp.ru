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
    <? if ($message) : ?>
        <h1><?= $message ?></h1>
    <? endif; ?>
    <? if ($_GET['id']) : ?>
        <h3><?= $article['title'] ?></h3>
        <br>
        <p>
            <?= $article['content'] ?>
        </p>                    
    <? endif ?>

</ul>