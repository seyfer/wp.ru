<?php /*%%SmartyHeaderCode:320234fa3a2e7a67d61-18105147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31bafea0fb88442f492fe44402e8ae1ddd0aaebd' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Editor.tpl',
      1 => 1336030336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320234fa3a2e7a67d61-18105147',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa3a976808fb5_92595838',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3a976808fb5_92595838')) {function content_4fa3a976808fb5_92595838($_smarty_tpl) {?>
 <p>
     <a href="?c=C_Editor">Статьи</a>
     <a href="?c=C_Menu_Editor">Меню</a>
 </p>
 <hr>

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
<?php }} ?>