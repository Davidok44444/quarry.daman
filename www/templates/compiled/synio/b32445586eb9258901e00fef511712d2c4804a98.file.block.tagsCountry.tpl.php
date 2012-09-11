<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:07:51
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.tagsCountry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:553840069504651872588a7-67412336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32445586eb9258901e00fef511712d2c4804a98' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/blocks/block.tagsCountry.tpl',
      1 => 1345531542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553840069504651872588a7-67412336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aCountryList' => 0,
    'aLang' => 0,
    'oCountry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_504651872b6957_16755358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504651872b6957_16755358')) {function content_504651872b6957_16755358($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['aCountryList']->value&&count($_smarty_tpl->tpl_vars['aCountryList']->value)>0){?>
	<section class="block">
		<header class="block-header">
			<h3><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_country_tags'];?>
</h3>
		</header>
		
		
		<div class="block-content">
			<ul class="tag-cloud word-wrap">
				<?php  $_smarty_tpl->tpl_vars['oCountry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oCountry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aCountryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oCountry']->key => $_smarty_tpl->tpl_vars['oCountry']->value){
$_smarty_tpl->tpl_vars['oCountry']->_loop = true;
?>
					<li><a class="tag-size-<?php echo $_smarty_tpl->tpl_vars['oCountry']->value->getSize();?>
" href="<?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
country/<?php echo $_smarty_tpl->tpl_vars['oCountry']->value->getId();?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oCountry']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
				<?php } ?>					
			</ul>	
		</div>		
	</section>
<?php }?><?php }} ?>