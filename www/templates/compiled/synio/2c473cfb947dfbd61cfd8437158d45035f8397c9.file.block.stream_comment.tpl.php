<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:12
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.stream_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7872905695045a954b08445-43954031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c473cfb947dfbd61cfd8437158d45035f8397c9' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.stream_comment.tpl',
      1 => 1345531542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7872905695045a954b08445-43954031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aComments' => 0,
    'oComment' => 0,
    'oTopic' => 0,
    'oUser' => 0,
    'oConfig' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a954c36173_47701877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a954c36173_47701877')) {function content_5045a954c36173_47701877($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/u224958/quarry.ru/www/engine/lib/external/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><ul class="latest-list">
	<?php  $_smarty_tpl->tpl_vars['oComment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oComment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oComment']->key => $_smarty_tpl->tpl_vars['oComment']->value){
$_smarty_tpl->tpl_vars['oComment']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars["oUser"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getUser(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oTopic"] = new Smarty_variable($_smarty_tpl->tpl_vars['oComment']->value->getTarget(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars["oBlog"] = new Smarty_variable($_smarty_tpl->tpl_vars['oTopic']->value->getBlog(), null, 0);?>
		
		<li class="js-title-comment" title="<?php echo htmlspecialchars(smarty_modifier_truncate(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['oComment']->value->getText())),100,'...'), ENT_QUOTES, 'UTF-8', true);?>
">
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['oUser']->value->getUserWebPath();?>
" class="author"><?php echo $_smarty_tpl->tpl_vars['oUser']->value->getLogin();?>
</a>
				<time datetime="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>'c'),$_smarty_tpl);?>
" title="<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'format'=>"j F Y, H:i"),$_smarty_tpl);?>
">
					<?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oComment']->value->getDate(),'hours_back'=>"12",'minutes_back'=>"60",'now'=>"60",'day'=>"day H:i",'format'=>"j F Y, H:i"),$_smarty_tpl);?>

				</time>
			</p>
			<a href="<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_per_page')){?><?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#comment<?php }?><?php echo $_smarty_tpl->tpl_vars['oComment']->value->getId();?>
" class="stream-topic"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oTopic']->value->getTitle(), ENT_QUOTES, 'UTF-8', true);?>
</a>
			<span class="block-item-comments"><i class="icon-synio-comments-small"></i><?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCountComment();?>
</span>
		</li>
	<?php } ?>
</ul>


<footer>
	<a href="<?php echo smarty_function_router(array('page'=>'comments'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_stream_comments_all'];?>
</a> · <a href="<?php echo smarty_function_router(array('page'=>'rss'),$_smarty_tpl);?>
allcomments/">RSS</a>
</footer><?php }} ?>