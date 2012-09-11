<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:10:58
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.blogInfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5074925855045b792ea0e80-63907587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcbef222a64826d785be0235002024bd3a3b416d' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.blogInfo.tpl',
      1 => 1345531541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5074925855045b792ea0e80-63907587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b792eb9f00_88153617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b792eb9f00_88153617')) {function content_5045b792eb9f00_88153617($_smarty_tpl) {?><section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info'];?>
</h3>
	</header>
	
	<div class="block-content">
		<p id="block_blog_info"></p>
	</div>	
</section>


<section class="block">
	<header class="block-header">
		<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note'];?>
</h3>
	</header>
	
	<div class="block-content">	
		<p><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_blog_info_note_text'];?>
</p>
	</div>	
</section><?php }} ?>