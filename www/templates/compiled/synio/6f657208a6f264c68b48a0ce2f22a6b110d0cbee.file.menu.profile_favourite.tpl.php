<?php /* Smarty version Smarty-3.1.8, created on 2012-09-06 15:35:36
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/menu.profile_favourite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27028721150488a88b19923-26498987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f657208a6f264c68b48a0ce2f22a6b110d0cbee' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/menu.profile_favourite.tpl',
      1 => 1345531553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27028721150488a88b19923-26498987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuSubItemSelect' => 0,
    'oUserProfile' => 0,
    'aLang' => 0,
    'iCountTopicFavourite' => 0,
    'iCountCommentFavourite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50488a88bab481_68466715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50488a88bab481_68466715')) {function content_50488a88bab481_68466715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><ul class="nav nav-pills nav-pills-profile">
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='topics'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
favourites/topics/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites_topics'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountTopicFavourite']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountTopicFavourite']->value;?>
) <?php }?></a>
	</li>
	<li <?php if ($_smarty_tpl->tpl_vars['sMenuSubItemSelect']->value=='comments'){?>class="active"<?php }?>>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oUserProfile']->value->getUserWebPath();?>
favourites/comments/"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_menu_profile_favourites_comments'];?>
  <?php if ($_smarty_tpl->tpl_vars['iCountCommentFavourite']->value){?> (<?php echo $_smarty_tpl->tpl_vars['iCountCommentFavourite']->value;?>
) <?php }?></a>
	</li>

	<?php echo smarty_function_hook(array('run'=>'menu_profile_favourite_item','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

</ul>

<?php echo smarty_function_hook(array('run'=>'menu_profile_favourite','oUserProfile'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>

<?php }} ?>