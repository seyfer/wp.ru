<?php /*%%SmartyHeaderCode:306024f9f96da06b681-09609563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7851531096023603d459e1b43aaf23684c4a9a' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Edit.tpl',
      1 => 1335235174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306024f9f96da06b681-09609563',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96e673e974_77873750',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96e673e974_77873750')) {function content_4f9f96e673e974_77873750($_smarty_tpl) {?><?php echo '<?'; ?> /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ <?php echo '?>'; ?>

<form method="post" action="index.php?c=C_Edit&id=68">
    Название:
    <br/>
    <input type="text" name="title" value="первая" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая первая</textarea>
    <br/>
    <input type="hidden" name="id_article" value="68" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>

<?php }} ?>