<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 23:05:56
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionUserfeed/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169480238504651147dc9d7-80500379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86490ffc1b8ecd4052eb1f849d4c62a1aa45057c' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/actions/ActionUserfeed/list.tpl',
      1 => 1345531541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169480238504651147dc9d7-80500379',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aTopics' => 0,
    'bDisableGetMoreButton' => 0,
    'iUserfeedLastId' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50465114918471_01426750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50465114918471_01426750')) {function content_50465114918471_01426750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php if (count($_smarty_tpl->tpl_vars['aTopics']->value)){?>
    <?php if (!$_smarty_tpl->tpl_vars['bDisableGetMoreButton']->value){?>
        <div id="userfeed_loaded_topics"></div>
        <input type="hidden" id="userfeed_last_id" value="<?php echo $_smarty_tpl->tpl_vars['iUserfeedLastId']->value;?>
" />
        <a class="stream-get-more" id="userfeed_get_more" href="javascript:ls.userfeed.getMore()"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_get_more'];?>
 &darr;</a>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['aLang']->value['userfeed_no_events'];?>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>