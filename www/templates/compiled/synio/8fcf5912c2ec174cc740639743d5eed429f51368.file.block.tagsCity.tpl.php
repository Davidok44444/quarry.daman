<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:07:51
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.tagsCity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:930529535046518739aaf5-11074393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fcf5912c2ec174cc740639743d5eed429f51368' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.tagsCity.tpl',
      1 => 1345531542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930529535046518739aaf5-11074393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCityList' => 0,
    'aLang' => 0,
    'oCity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504651873ed858_44659405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504651873ed858_44659405')) {function content_504651873ed858_44659405($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aCityList']->value&&count($_smarty_tpl->tpl_vars['aCityList']->value)>0){?>
	<section class="block">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_city_tags'];?>
</h3>
		</header>
		
		
		<div class="block-content">
			<ul class="tag-cloud word-wrap">
				<?php  $_smarty_tpl->tpl_vars['oCity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCityList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCity']->key => $_smarty_tpl->tpl_vars['oCity']->value){
$_smarty_tpl->tpl_vars['oCity']->_loop = true;
?>
					<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
city/<?php echo $_smarty_tpl->tpl_vars['oCity']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCity']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				<?php } ?>					
			</ul>	
		</div>		
	</section>
<?php }?><?php }} ?>