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
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9f96da12dc43_89585214',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9f96da12dc43_89585214')) {function content_4f9f96da12dc43_89585214($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Веб Гуру::Редактировать:вторая</title>
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
                                    <h1>Редактировать статью</h1>
                                <?php echo '<?'; ?> /*
Шаблон главной страницы
=======================
$title - заголовок
$content - содержание
*/ <?php echo '?>'; ?>
<form method="post" action="index.php?c=C_Edit&id=69">
    Название:
    <br/>
    <input type="text" name="title" value="вторая" />
    <br/>
    <br/>
    Содержание:
    <br/>
    <textarea name="content">вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая вторая</textarea>
    <br/>
    <input type="hidden" name="id_article" value="69" />
    <input type="submit" name ="edit" value="Применить" />
    <input type="submit" name ="delete" value="Удалить" style="margin-left: 40px;"/>
</form>


            </div>
        </div>


        <p id="copyright"><a href=http://wp.ru/>
                cms.me
            </a> &copy;</p>

    </body>
</html><?php }} ?>