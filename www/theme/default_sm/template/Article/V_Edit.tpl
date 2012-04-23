<? /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ ?>


<h1>Редактировать статью</h1>

{if $success}
    <b>Успешно обновлена</b>
{/if}

<form method="post" action="index.php?c=C_Edit&id={$id_article}">
    Название:
    <br/>
    <input type="text" name="title" value="{$title}" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">{$content}</textarea>
    <br/>
    <input type="hidden" name="id_article" value="{$id_article}" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

