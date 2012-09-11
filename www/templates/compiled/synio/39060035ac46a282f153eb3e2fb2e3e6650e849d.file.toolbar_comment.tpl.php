<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:11
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20212202885045a953aac057-78109057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39060035ac46a282f153eb3e2fb2e3e6650e849d' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_comment.tpl',
      1 => 1345531562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20212202885045a953aac057-78109057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'params' => 0,
    'aPagingCmt' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a953b05a67_88975991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a953b05a67_88975991')) {function content_5045a953b05a67_88975991($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<?php $_smarty_tpl->tpl_vars['aPagingCmt'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value['aPagingCmt'], null, 0);?>
	<section class="toolbar-update" id="update" style="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>display: none;<?php }?>">
		<a href="#" class="update-comments" id="update-comments" onclick="ls.comments.load(<?php echo $_smarty_tpl->tpl_vars['params']->value['iTargetId'];?>
,'<?php echo $_smarty_tpl->tpl_vars['params']->value['sTargetType'];?>
'); return false;"><i></i></a>
		<a href="#" class="new-comments" id="new_comments_counter" style="display: none;" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['comment_count_new'];?>
" onclick="ls.comments.goToNextComment(); return false;"></a>

		<input type="hidden" id="comment_last_id" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['iMaxIdComment'];?>
" />
		<input type="hidden" id="comment_use_paging" value="<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>1<?php }?>" />
	</section>
<?php }?>
	
<?php }} ?>