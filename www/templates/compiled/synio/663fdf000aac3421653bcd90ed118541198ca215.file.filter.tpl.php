<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 23:11:44
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTalk/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3174769015047a3f04954c2-06740732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '663fdf000aac3421653bcd90ed118541198ca215' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionTalk/filter.tpl',
      1 => 1345531540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3174769015047a3f04954c2-06740732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
    '_aRequest' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5047a3f051e4e3_10445455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5047a3f051e4e3_10445455')) {function content_5047a3f051e4e3_10445455($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><div class="talk-search" id="block_talk_search">
	<header>
		<button type="submit"  onclick="ls.talk.makeReadTalks()" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_make_read'];?>
</button>
		<button type="submit"  onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_delete_confirm'];?>
')){ ls.talk.removeTalks() };" class="button"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_inbox_delete'];?>
</button>

		<a href="#" class="link-dotted close" onclick="ls.talk.toggleSearchForm(); return false;"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_title'];?>
</a>
	</header>
	
	<div class="talk-search-content" id="block_talk_search_content" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['submit_talk_filter']){?>style="display:block;" <?php }?>>
		<form action="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" method="GET" name="talk_filter_form">
			<p><input type="text" id="talk_filter_sender" name="sender" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['sender'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_label_sender'];?>
" class="input-text input-width-250" /></p>

			<p><input type="text" id="talk_filter_keyword" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['keyword'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_label_keyword'];?>
" class="input-text input-width-250" /></p>

			<p><input type="text" id="talk_filter_keyword_text" name="keyword_text" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['keyword_text'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_label_keyword_text'];?>
" class="input-text input-width-250" /></p>

			<p><label for="talk_filter_start"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_label_date'];?>
:</label>
			<input type="text" id="talk_filter_start" name="start" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['start'];?>
" class="input-text input-text input-width-250 date-picker" readonly="readonly" /> &mdash;
			<input type="text" id="talk_filter_end" name="end" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['end'];?>
" class="input-text input-text input-width-250 date-picker" readonly="readonly" /></p>

			<p><label for="talk_filter_favourite"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['_aRequest']->value['favourite']){?>checked="checked" <?php }?> class="input-checkbox" name="favourite" value="1" id="talk_filter_favourite" />
			<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_label_favourite'];?>
</label></p>

			<input type="submit" name="submit_talk_filter" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_submit'];?>
" class="button button-primary" />
			<input type="submit" name="" value="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['talk_filter_submit_clear'];?>
" class="button" onclick="return ls.talk.clearFilter();" />
		</form>
	</div>
</div><?php }} ?>