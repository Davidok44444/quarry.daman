<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 20:13:40
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionRss/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100160350150477a349ef817-62642060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a8de2c6424ab75269ca8649454533261b10cf10' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionRss/index.tpl',
      1 => 1345531537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100160350150477a349ef817-62642060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aChannel' => 0,
    'PATH_WEB_CURRENT' => 0,
    'aItems' => 0,
    'oItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50477a34cf8656_64242338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50477a34cf8656_64242338')) {function content_50477a34cf8656_64242338($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
if (!is_callable('smarty_function_date_format')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.date_format.php';
if (!is_callable('smarty_modifier_replace')) include '/home/u224958/quarry.ru/www/engine/lib/external/Smarty/libs/plugins/modifier.replace.php';
?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
	<title><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['title'];?>
</title>
	<link><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['link'];?>
</link>
	<atom:link href="<?php echo $_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value;?>
/" rel="self" type="application/rss+xml" />
	<description><![CDATA[<?php echo $_smarty_tpl->tpl_vars['aChannel']->value['description'];?>
]]></description>
	<language><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['language'];?>
</language>
	<managingEditor><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['managingEditor'];?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</managingEditor>
	<webMaster><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['managingEditor'];?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</webMaster>
	<copyright><?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
</copyright>
	<generator><?php echo $_smarty_tpl->tpl_vars['aChannel']->value['generator'];?>
</generator>
<?php  $_smarty_tpl->tpl_vars['oItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oItem']->key => $_smarty_tpl->tpl_vars['oItem']->value){
$_smarty_tpl->tpl_vars['oItem']->_loop = true;
?>
		<item>
			<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oItem']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</title>
			<guid isPermaLink="true"><?php echo $_smarty_tpl->tpl_vars['oItem']->value['guid'];?>
</guid>
			<link><?php echo $_smarty_tpl->tpl_vars['oItem']->value['link'];?>
</link>
			<dc:creator><?php echo $_smarty_tpl->tpl_vars['oItem']->value['author'];?>
</dc:creator>
			<description><![CDATA[<?php echo $_smarty_tpl->tpl_vars['oItem']->value['description'];?>
]]></description>
			<pubDate><?php echo smarty_function_date_format(array('date'=>$_smarty_tpl->tpl_vars['oItem']->value['pubDate'],'format'=>"r"),$_smarty_tpl);?>
</pubDate>			
			<category><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['oItem']->value['category'],',','</category>
			<category>');?>
</category>
		</item>
<?php } ?>
</channel>
</rss>
<?php }} ?>