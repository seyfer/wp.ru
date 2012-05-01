<?php /*%%SmartyHeaderCode:304314f9f96d6ae1fb9-90050475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7a6f62d36ab12d74c691c0c83a43e6b14437ede' => 
    array (
      0 => 'Z:\\home\\wp.ru\\www\\theme\\default_sm\\template\\V_Main.tpl',
      1 => 1335856816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304314f9f96d6ae1fb9-90050475',
  'variables' => 
  array (
    'title' => 0,
    'site_theme' => 0,
    'site_root_path' => 0,
    'menu' => 0,
    'message' => 0,
    'content' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96d6bb9594_17777087',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96d6bb9594_17777087')) {function content_4f9f96d6bb9594_17777087($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Веб Гуру::Редактирование статей</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type">
        <link rel="stylesheet" type="text/css" media="screen"
              href="theme/default_sm/template/style.css" />
    </head>
    <body>
        <div class="main">
            <div id="logo">
                <a href="http://wp.ru/">
                    <img src="
                         theme/default_sm/template/wg.png" />
                </a>
            </div>

            <div class="menu">
                <div class="menu">
                        <a href="?c=C_Index" class="
                              ">Главная</a>
                    <a href="?c=C_Editor" class="
                                  active
                              ">Консоль редактора</a>
            </div>

            </div>

            <div class="content">
                                <?php echo '<?'; ?> /*
  Шаблон главной страницы
  =======================
  $articles - список статей

  статья:
  id_article - идентификатор
  title - заголвок
  content - текст
 */ <?php echo '?>'; ?>

<ul>
    <li>
        <b><a href="index.php?c=C_New">Новая статья</a></b>
    </li>	
            <li>
            <a href="index.php?c=C_Edit&id=70">
                третья1
            </a>
        </li>
            <li>
            <a href="index.php?c=C_Edit&id=69">
                вторая
            </a>
        </li>
            <li>
            <a href="index.php?c=C_Edit&id=68">
                первая
            </a>
        </li>
    </ul>

            </div>
        </div>


        <p id="copyright"><a href=http://wp.ru/>
                cms.me
            </a> &copy;</p>

    </body>
</html><?php }} ?>