<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8198305755045a955cb3ec1-79857633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682bc8e96ddfe3899b01f14264c7478992bf3728' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/toolbar_topic.tpl',
      1 => 1345531562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8198305755045a955cb3ec1-79857633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a955ccf444_69817179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a955ccf444_69817179')) {function content_5045a955ccf444_69817179($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['params']->value['iCountTopic']){?>
	<section class="toolbar-topic" id="" style="">
		<a href="#" onclick="return ls.toolbar.topic.goPrev();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_prev'];?>
" class="toolbar-topic-prev"><i></i></a>
		<a href="#" onclick="return ls.toolbar.topic.goNext();" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['toolbar_topic_next'];?>
" class="toolbar-topic-next"><i></i></a>
	</section>
<?php }?>

	
<?php }} ?>