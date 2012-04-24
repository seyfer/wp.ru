<?php /*%%SmartyHeaderCode:226644f96083e593431-90697088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7851531096023603d459e1b43aaf23684c4a9a' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Edit.tpl',
      1 => 1335163251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226644f96083e593431-90697088',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f960b5c59a368_74826591',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f960b5c59a368_74826591')) {function content_4f960b5c59a368_74826591($_smarty_tpl) {?><?php echo '<?'; ?> /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ <?php echo '?>'; ?>


<h1>Редактировать статью</h1>


<form method="post" action="index.php?c=C_Edit&id=49">
    Название:
    <br/>
    <input type="text" name="title" value="ааа" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">ааа</textarea>
    <br/>
    <input type="hidden" name="id_article" value="49" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

<?php }} ?>