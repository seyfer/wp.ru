<?php /*%%SmartyHeaderCode:267204fab27a1b11e13-35928157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7851531096023603d459e1b43aaf23684c4a9a' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Edit.tpl',
      1 => 1336030336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267204fab27a1b11e13-35928157',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fab83d52d9c02_15929780',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fab83d52d9c02_15929780')) {function content_4fab83d52d9c02_15929780($_smarty_tpl) {?><?php echo '<?'; ?> /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ <?php echo '?>'; ?>

<form method="post" action="index.php?c=C_Edit&id=70">
    Название:
    <br/>
    <input type="text" name="title" value="третья1" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья третья</textarea>
    <br/>
    <input type="hidden" name="id_article" value="70" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

<?php }} ?>