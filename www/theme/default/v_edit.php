<? /*
  Шаблон главной страницы
  =======================
  $title - заголовок
  $content - содержание
 */ ?>


<h1>Редактировать статью</h1>

<? if ($success) : ?>
    <b>Успешно обновлена</b>
<? endif; ?>

<form method="post" action="edit.php?id=<?= $id ?>">
    Название:
    <br/>
    <input type="text" name="title" value="<?= $ar_title ?>" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content"><?= $ar_content ?></textarea>
    <br/>
    <input type="hidden" name="id" value="<?= $id ?>" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

