<?php /*%%SmartyHeaderCode:322454f9f96d7f26991-84793678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32bcee04f47bfb0f43331ce81012ef2e16bd4dad' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_New.tpl',
      1 => 1335162407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322454f9f96d7f26991-84793678',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96d80548c9_82233129',
  'cache_lifetime' => 600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96d80548c9_82233129')) {function content_4f9f96d80548c9_82233129($_smarty_tpl) {?><?php echo '<?'; ?> /*
  Шаблон главной страницы
  =======================
  $title - заголовок
  $content - содержание
 */ <?php echo '?>'; ?>


<h1>Новая статья</h1>
<form method="post">
    Название:
    <br/>
    <input type="text" name="title" value="" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content"></textarea>
    <br/>
    <input type="submit" value="Добавить" />
</form>

<?php }} ?>