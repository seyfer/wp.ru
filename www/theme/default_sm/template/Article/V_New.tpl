<? /*
  Шаблон главной страницы
  =======================
  $title - заголовок
  $content - содержание
 */ ?>


<h1>Новая статья</h1>
<form method="post">
    Название:
    <br/>
    <input type="text" name="title" value="{$title}" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">{$content}</textarea>
    <br/>
    <input type="submit" value="Добавить" />
</form>

