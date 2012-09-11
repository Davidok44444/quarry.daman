<?php /* Smarty version Smarty-3.1.8, created on 2012-09-11 17:33:05
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.create.content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15863252875045b792ec7710-61201743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aebc4464c4874428ba65644f8fd76f8786cffc4' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.create.content.tpl',
      1 => 1347370381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15863252875045b792ec7710-61201743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b7930a62b6_69298978',
  'variables' => 
  array (
    'aLang' => 0,
    'sMenuItemSelect' => 0,
    'iUserCurrentCountTopicDraft' => 0,
    'sMenuSubItemSelect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b7930a62b6_69298978')) {function content_5045b7930a62b6_69298978($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><script type="text/javascript">
	jQuery(window).load(function () {
		var trigger = $('#dropdown-create-trigger');
		var menu 	= $('#dropdown-create-menu');
		var pos 	= trigger.offset();
	
	
		// Dropdown
		menu.find('li.active').prependTo(menu).click(function(){
			menu.hide();
			return false;
		});
		menu.appendTo('body').css({ 'left': pos.left - 18, 'top': pos.top - 13, 'display': 'none' });
	
		trigger.click(function(){
			menu.toggle(); 
			return false;
		});
		
		
		// Hide menu
		$(document).click(function(){
			menu.hide();
		});
	
		$('body').on("click", "#dropdown-create-trigger, #dropdown-create-menu", function(e) {
			e.stopPropagation();
		});
		
		$(window).resize(function(){
			menu.css({ 'left': $('#dropdown-create-trigger').offset().left - 18 });
		});
	});
</script>


<div class="dropdown-create">
	<h2 class="page-header"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create'];?>
 <a href="#" class="dropdown-create-trigger link-dashed" id="dropdown-create-trigger"><?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add'];?>
<?php }elseif($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_create'];?>
<?php }elseif($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='talk'){?><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_talk'];?>
<?php }else{ ?><?php echo smarty_function_hook(array('run'=>'menu_create_item_select','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value),$_smarty_tpl);?>
<?php }?></a></h2>
	
	<ul class="dropdown-menu-create" id="dropdown-create-menu" style="display: none">
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_add'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='blog'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'blog'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['blog_menu_create'];?>
</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='talk'){?>class="active"<?php }?>><a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
add/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['block_create_talk'];?>
</a></li>
		<?php echo smarty_function_hook(array('run'=>'menu_create_item','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value),$_smarty_tpl);?>

	</ul>
</div>


<?php if ($_smarty_tpl->tpl_vars['sMenuItemSelect']->value=='topic'){?>
	<?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value){?>
		<a href="<?php echo smarty_function_router(array('page'=>'topic'),$_smarty_tpl);?>
saved/" class="drafts"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_menu_saved'];?>
 (<?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTopicDraft']->value;?>
)</a>
	<?php }?>
<?php }?>


<?php echo smarty_function_hook(array('run'=>'menu_create','sMenuItemSelect'=>$_smarty_tpl->tpl_vars['sMenuItemSelect']->value,'sMenuSubItemSelect'=>$_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value),$_smarty_tpl);?>
<?php }} ?>