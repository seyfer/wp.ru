<?php /*%%SmartyHeaderCode:100414f9f96d6928144-04101635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31bafea0fb88442f492fe44402e8ae1ddd0aaebd' => 
    array (
      0 => 'Z:/home/wp.ru/www/theme/default_sm/template\\Article\\V_Editor.tpl',
      1 => 1335862974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100414f9f96d6928144-04101635',
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f9facae3f1631_90278910',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9facae3f1631_90278910')) {function content_4f9facae3f1631_90278910($_smarty_tpl) {?>
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