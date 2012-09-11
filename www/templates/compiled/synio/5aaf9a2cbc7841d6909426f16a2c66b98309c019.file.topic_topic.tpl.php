<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 11:10:13
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/topic_topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20498095255045a955488a00-03640938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aaf9a2cbc7841d6909426f16a2c66b98309c019' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/topic_topic.tpl',
      1 => 1345531563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20498095255045a955488a00-03640938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oTopic' => 0,
    'bTopicList' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045a95550fee3_00620952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045a95550fee3_00620952')) {function content_5045a95550fee3_00620952($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
?><?php echo $_smarty_tpl->getSubTemplate ('topic_part_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   
   
<div class="topic-content text">
	<?php echo smarty_function_hook(array('run'=>'topic_content_begin','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

	
	<?php if ($_smarty_tpl->tpl_vars['bTopicList']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getTextShort();?>

		
		<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getTextShort()!=$_smarty_tpl->tpl_vars['oTopic']->value->getText()){?>
			<br/>
			<a href="<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getUrl();?>
#cut" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['oTopic']->value->getCutText()){?>
					<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getCutText();?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars['aLang']->value['topic_read_more'];?>
 &rarr;
				<?php }?>
			</a>
		<?php }?>
	<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['oTopic']->value->getText();?>

	<?php }?>
	
	<?php echo smarty_function_hook(array('run'=>'topic_content_end','topic'=>$_smarty_tpl->tpl_vars['oTopic']->value,'bTopicList'=>$_smarty_tpl->tpl_vars['bTopicList']->value),$_smarty_tpl);?>

</div> 


<?php echo $_smarty_tpl->getSubTemplate ('topic_part_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>