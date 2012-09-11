<?php /* Smarty version Smarty-3.1.8, created on 2012-09-05 11:28:23
         compiled from "/home/u224958/quarry.ru/www/plugins/profiler/templates/skin/default/link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12282413855046ff1734c703-21527020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128e3c8cf614b011806606abab08d1c889964813' => 
    array (
      0 => '/home/u224958/quarry.ru/www/plugins/profiler/templates/skin/default/link.tpl',
      1 => 1345531571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12282413855046ff1734c703-21527020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5046ff1741a0a9_94533309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5046ff1741a0a9_94533309')) {function content_5046ff1741a0a9_94533309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
?><p align="center">
	Profiler: <?php if ($_smarty_tpl->tpl_vars['oConfig']->value->GetValue('sys.logs.profiler')){?>On<?php }else{ ?>Off<?php }?> | 
	<a href="<?php echo smarty_function_router(array('page'=>'profiler'),$_smarty_tpl);?>
">Profiler reports</a>
</p><?php }} ?>