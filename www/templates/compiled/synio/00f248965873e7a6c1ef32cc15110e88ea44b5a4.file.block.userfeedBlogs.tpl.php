<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:05:56
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.userfeedBlogs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:876712058504651149fa2d8-92923938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f248965873e7a6c1ef32cc15110e88ea44b5a4' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.userfeedBlogs.tpl',
      1 => 1345531542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876712058504651149fa2d8-92923938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'aUserfeedBlogs' => 0,
    'oBlog' => 0,
    'iBlogId' => 0,
    'aUserfeedSubscribedBlogs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50465114b143a0_41254942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50465114b143a0_41254942')) {function content_50465114b143a0_41254942($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<section class="block block-type-activity">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_block_blogs_title'];?>
</h3>
		</header>
		
		<div class="block-content">
			<small class="note"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_settings_note_follow_blogs'];?>
</small>

			<?php if (count($_smarty_tpl->tpl_vars['aUserfeedBlogs']->value)){?>
				<ul class="stream-settings-blogs">
					<?php  $_smarty_tpl->tpl_vars['oBlog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oBlog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aUserfeedBlogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oBlog']->key => $_smarty_tpl->tpl_vars['oBlog']->value){
$_smarty_tpl->tpl_vars['oBlog']->_loop = true;
?>
						<?php $_smarty_tpl->tpl_vars['iBlogId'] = new Smarty_variable($_smarty_tpl->tpl_vars['oBlog']->value->getId(), null, 0);?>
						<li><input class="userfeedBlogCheckbox input-checkbox"
									type="checkbox"
									<?php if (isset($_smarty_tpl->tpl_vars['aUserfeedSubscribedBlogs']->value[$_smarty_tpl->tpl_vars['iBlogId']->value])){?> checked="checked"<?php }?>
									onClick="if (jQuery(this).prop('checked')) { ls.userfeed.subscribe('blogs',<?php echo $_smarty_tpl->tpl_vars['iBlogId']->value;?>
) } else { ls.userfeed.unsubscribe('blogs',<?php echo $_smarty_tpl->tpl_vars['iBlogId']->value;?>
) } " />
							<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
						</li>
					<?php } ?>
				</ul>
			<?php }else{ ?>
				<small class="notice-empty"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_no_blogs'];?>
</small>
			<?php }?>
		</div>
	</section>
<?php }?><?php }} ?>