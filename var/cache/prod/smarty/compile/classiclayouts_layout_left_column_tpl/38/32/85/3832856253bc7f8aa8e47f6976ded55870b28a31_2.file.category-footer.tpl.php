<?php
/* Smarty version 4.2.1, created on 2024-04-03 23:13:54
  from 'D:\Install Dev\Php\htdocs\prestashopWebsite\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_660e29028228b6_07927782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3832856253bc7f8aa8e47f6976ded55870b28a31' => 
    array (
      0 => 'D:\\Install Dev\\Php\\htdocs\\prestashopWebsite\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1671912450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660e29028228b6_07927782 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
