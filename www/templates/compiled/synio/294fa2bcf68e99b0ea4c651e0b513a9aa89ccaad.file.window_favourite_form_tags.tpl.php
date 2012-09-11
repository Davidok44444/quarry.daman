<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:09:02
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/window_favourite_form_tags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6772637275045a90ee67108-88642559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294fa2bcf68e99b0ea4c651e0b513a9aa89ccaad' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/window_favourite_form_tags.tpl',
      1 => 1345531564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6772637275045a90ee67108-88642559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a90eea0438_51699020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a90eea0438_51699020')) {function content_5045a90eea0438_51699020($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<div id="favourite-form-tags" class="modal">
		<header class="modal-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['add_favourite_tags'];?>
</h3>
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<form onsubmit="return ls.favourite.saveTags(this);" class="modal-content">
			<input type="hidden" name="target_type" value="" id="favourite-form-tags-target-type">
			<input type="hidden" name="target_id" value="" id="favourite-form-tags-target-id">

			<p><input type="text" name="tags" value="" id="favourite-form-tags-tags" class="autocomplete-tags-sep input-text input-width-full"></p>
			<button type="submit"  name="" class="button button-primary" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_save'];?>
</button>
			<button type="submit"  name="" class="button jqmClose" /><?php echo $_smarty_tpl->tpl_vars['aLang']->value['favourite_form_tags_button_cancel'];?>
</button>
		</form>
	</div>
<?php }?><?php }} ?>