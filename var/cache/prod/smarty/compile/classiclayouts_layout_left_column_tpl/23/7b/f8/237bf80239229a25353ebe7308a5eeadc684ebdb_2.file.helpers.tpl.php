<?php
/* Smarty version 4.2.1, created on 2024-04-03 23:13:45
  from 'D:\Install Dev\Php\htdocs\prestashopWebsite\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_660e28f9b93d20_31943419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '237bf80239229a25353ebe7308a5eeadc684ebdb' => 
    array (
      0 => 'D:\\Install Dev\\Php\\htdocs\\prestashopWebsite\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671912450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e28f9b93d20_31943419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\Install Dev\\Php\\htdocs\\prestashopWebsite\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\23\\7b\\f8\\237bf80239229a25353ebe7308a5eeadc684ebdb_2.file.helpers.tpl.php',
    'uid' => '237bf80239229a25353ebe7308a5eeadc684ebdb',
    'call_name' => 'smarty_template_function_renderLogo_147855573660e28f9b739e1_51531465',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_147855573660e28f9b739e1_51531465 */
if (!function_exists('smarty_template_function_renderLogo_147855573660e28f9b739e1_51531465')) {
function smarty_template_function_renderLogo_147855573660e28f9b739e1_51531465(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_147855573660e28f9b739e1_51531465 */
}
