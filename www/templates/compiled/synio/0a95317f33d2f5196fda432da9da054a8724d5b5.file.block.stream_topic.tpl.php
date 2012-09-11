<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:10:35
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.stream_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2759451605045b77b4b4391-18313505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a95317f33d2f5196fda432da9da054a8724d5b5' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.stream_topic.tpl',
      1 => 1345531542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2759451605045b77b4b4391-18313505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopics' => 0,
    'oTopic' => 0,
    'oUser' => 0,
    'oBlog' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b77b6d7239_02907038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b77b6d7239_02907038')) {function content_5045b77b6d7239_02907038($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/u224958/quarry.ru/www/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><ul class="latest-list">
	<?php  $_smarty_tpl->tpl_vars['oTopic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oTopic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oTopics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oTopic']->key => $_smarty_tpl->tpl_vars['oTopic']->value){
$_smarty_tpl->tpl_vars['oTopic']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getUser(), null, 0);?>							
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
		
		<li class="js-title-topic" title="<?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oTopic']->value->getText())),150,'...'), ENT_QUOTES, 'UTF-8', true);?>
">
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oTopic']->value->getDateAdd(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
			</p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oBlog']->value->getUrlFull();?>
" class="stream-blog"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oBlog']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a> &rarr;
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
" class="stream-topic"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<span class="block-item-comments"><i class="icon-synio-comments-small"></i><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</span>
		</li>
	<?php } ?>
</ul>


<footer>
	<a href="<?php echo smarty_function_router(array('page'=>'index'),$_smarty_tpl);?>
new/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_topics_all'];?>
</a> · <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
new/">RSS</a>
</footer>
					<?php }} ?>