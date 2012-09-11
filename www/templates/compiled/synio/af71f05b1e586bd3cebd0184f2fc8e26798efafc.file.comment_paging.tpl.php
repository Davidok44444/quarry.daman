<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:11
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/comment_paging.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5591258865045a9538caca3-63980441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af71f05b1e586bd3cebd0184f2fc8e26798efafc' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/comment_paging.tpl',
      1 => 1345531543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5591258865045a9538caca3-63980441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPagingCmt' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'sGetSep' => 0,
    'iPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a953a12207_57100903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a953a12207_57100903')) {function content_5045a953a12207_57100903($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value&&$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']>1){?>
	<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams']){?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('&', null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars["sGetSep"] = new Smarty_variable('?', null, 0);?>
	<?php }?>
	
	<div class="pagination pagination-comments">				
		<ul>
			<li><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging'];?>
:</li>				
				
			<?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('module.comment.nested_page_reverse')){?>
			
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=1">&larr;</a></li>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
</a></li>
				<?php }?>
			
			<?php }else{ ?>
			
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']<$_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage']){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCountPage'];?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['paging_last'];?>
</a></li>
				<?php }?>
				
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesRight']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage'];?>
</li>
				<?php  $_smarty_tpl->tpl_vars['iPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPagingCmt']->value['aPagesLeft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iPage']->key => $_smarty_tpl->tpl_vars['iPage']->value){
$_smarty_tpl->tpl_vars['iPage']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=<?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['iPage']->value;?>
</a></li>
				<?php } ?>
				
				<?php if ($_smarty_tpl->tpl_vars['aPagingCmt']->value['iCurrentPage']>1){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['aPagingCmt']->value['sGetParams'];?>
<?php echo $_smarty_tpl->tpl_vars['sGetSep']->value;?>
cmtpage=1">&rarr;</a></li>
				<?php }?>
			
			<?php }?>
		</ul>
	</div>
<?php }?><?php }} ?>