<?php /* Smarty version Smarty-3.1.8, created on 2012-09-04 12:04:33
         compiled from "/home/u224958/quarry.ru/www//templates/skin/synio/window_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8620406625045b61125dc21-74710034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '110f524acb7d6f142b12ffaafe5bfa6c541c63a4' => 
    array (
      0 => '/home/u224958/quarry.ru/www//templates/skin/synio/window_login.tpl',
      1 => 1345531564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8620406625045b61125dc21-74710034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
    'oConfig' => 0,
    'PATH_WEB_CURRENT' => 0,
    '_aRequest' => 0,
    '_sPhpSessionName' => 0,
    '_sPhpSessionId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5045b6114c2981_23003094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5045b6114c2981_23003094')) {function content_5045b6114c2981_23003094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.router.php';
if (!is_callable('smarty_function_hook')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.hook.php';
if (!is_callable('smarty_block_hookb')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/block.hookb.php';
if (!is_callable('smarty_function_cfg')) include '/home/u224958/quarry.ru/www//engine/modules/viewer/plugs/function.cfg.php';
?><?php if (!$_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
	<div class="modal modal-login" id="window_login_form">
		<header class="modal-header">
			<a href="#" class="close jqmClose"></a>
		</header>
		
		
		<script type="text/javascript">
			jQuery(function($){
				$('#popup-login-form').bind('submit',function(){
					ls.user.login('popup-login-form');
					return false;
				});
				$('#popup-login-form-submit').attr('disabled',false);
			});
		</script>
		
		<div class="modal-content">
			<ul class="nav nav-pills nav-pills-tabs">
				<li class="active js-block-popup-login-item" data-type="login"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</a></li>
				<?php if (!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')){?>
					<li class="js-block-popup-login-item" data-type="registration"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration'];?>
</a></li>
				<?php }else{ ?>
					<li><a href="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration'];?>
</a></li>
				<?php }?>
				<li class="js-block-popup-login-item" data-type="reminder"><a href="#"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder'];?>
</a></li>
			</ul>
			
			
			<div class="tab-content js-block-popup-login-content" data-type="login">
				<?php echo smarty_function_hook(array('run'=>'login_popup_begin'),$_smarty_tpl);?>

				<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
" method="post" id="popup-login-form">
					<?php echo smarty_function_hook(array('run'=>'form_login_popup_begin'),$_smarty_tpl);?>


					<p><input type="text" name="login" id="popup-login" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login'];?>
" class="input-text input-width-full"></p>
					
					<p><input type="password" name="password" id="popup-password" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_password'];?>
" class="input-text input-width-300" style="width: 322px">
					<button type="submit"  name="submit_login" class="button button-primary" id="popup-login-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_submit'];?>
</button></p>
					
					<label class="remember-label"><input type="checkbox" name="remember" class="input-checkbox" checked /> <?php echo $_smarty_tpl->tpl_vars['aLang']->value['user_login_remember'];?>
</label>

					<small class="validate-error-hide validate-error-login"></small>
					<?php echo smarty_function_hook(array('run'=>'form_login_popup_end'),$_smarty_tpl);?>


					<input type="hidden" name="return-path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				</form>
				<?php echo smarty_function_hook(array('run'=>'login_popup_end'),$_smarty_tpl);?>

			</div>


			<?php if (!$_smarty_tpl->tpl_vars['oConfig']->value->GetValue('general.reg.invite')){?>
			<div data-type="registration" class="tab-content js-block-popup-login-content" style="display:none;">
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#popup-registration-form').find('input.js-ajax-validate').blur(function(e){
							var aParams={ };
							if ($(e.target).attr('name')=='password_confirm') {
								aParams['password']=$('#popup-registration-user-password').val();
							}
							if ($(e.target).attr('name')=='password') {
								aParams['password']=$('#popup-registration-user-password').val();
								if ($('#popup-registration-user-password-confirm').val()) {
									ls.user.validateRegistrationField('password_confirm',$('#popup-registration-user-password-confirm').val(),$('#popup-registration-form'),{ 'password': $(e.target).val() });
								}
							}
							ls.user.validateRegistrationField($(e.target).attr('name'),$(e.target).val(),$('#popup-registration-form'),aParams);
						});
						$('#popup-registration-form').bind('submit',function(){
							ls.user.registration('popup-registration-form');
							return false;
						});
						$('#popup-registration-form-submit').attr('disabled',false);
					});
				</script>

				<?php echo smarty_function_hook(array('run'=>'registration_begin','isPopup'=>true),$_smarty_tpl);?>

				<form action="<?php echo smarty_function_router(array('page'=>'registration'),$_smarty_tpl);?>
" method="post" id="popup-registration-form">
					<?php echo smarty_function_hook(array('run'=>'form_registration_begin','isPopup'=>true),$_smarty_tpl);?>


					<p>
					<input type="text" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_login'];?>
" id="popup-registration-login" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['login'];?>
" class="input-text input-width-300 js-ajax-validate" />
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_login_notice'];?>
"></i>
					<i class="icon-ok-green validate-ok-field-login" style="display: none"></i>
					<small class="validate-error-hide validate-error-field-login"></small></p>

					<p>
					<input type="text" name="mail" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_mail'];?>
" id="popup-registration-mail" value="<?php echo $_smarty_tpl->tpl_vars['_aRequest']->value['mail'];?>
" class="input-text input-width-300 js-ajax-validate" />
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_mail_notice'];?>
"></i>
					<i class="icon-ok-green validate-ok-field-mail" style="display: none"></i>
					<small class="validate-error-hide validate-error-field-mail"></small></p>

					<p>
					<input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password'];?>
" id="popup-registration-user-password" value="" class="input-text input-width-300 js-ajax-validate" />
					<i class="icon-question-sign js-tip-help" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password_notice'];?>
"></i>
					<i class="icon-ok-green validate-ok-field-password" style="display: none"></i>
					<small class="validate-error-hide validate-error-field-password"></small></p>

					<p>
					<input type="password" name="password_confirm" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_password_retry'];?>
" id="popup-registration-user-password-confirm" value="" class="input-text input-width-300 js-ajax-validate" />
					<i class="icon-ok-green validate-ok-field-password_confirm" style="display: none"></i>
					<small class="validate-error-hide validate-error-field-password_confirm"></small></p>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('hookb', array('run'=>"popup_registration_captcha")); $_block_repeat=true; echo smarty_block_hookb(array('run'=>"popup_registration_captcha"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p><label for="popup-registration-captcha"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_captcha'];?>
</label>
					<img src="<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
" 
						 onclick="this.src='<?php echo smarty_function_cfg(array('name'=>'path.root.engine_lib'),$_smarty_tpl);?>
/external/kcaptcha/index.php?<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_sPhpSessionId']->value;?>
&n='+Math.random();"
						 class="captcha-image" />
					<input type="text" name="captcha" id="popup-registration-captcha" value="" maxlength="3" class="input-text input-width-100 js-ajax-validate" />
					<small class="validate-error-hide validate-error-field-captcha"></small></p>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hookb(array('run'=>"popup_registration_captcha"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					<?php echo smarty_function_hook(array('run'=>'form_registration_end','isPopup'=>true),$_smarty_tpl);?>


					<input type="hidden" name="return-path" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<button type="submit"  name="submit_register" class="button button-primary" id="popup-registration-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['registration_submit'];?>
</button>
				</form>
				<?php echo smarty_function_hook(array('run'=>'registration_end','isPopup'=>true),$_smarty_tpl);?>

			</div>
			<?php }?>
			
			
			<div data-type="reminder" class="tab-content js-block-popup-login-content" style="display:none;">
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$('#popup-reminder-form').bind('submit',function(){
							ls.user.reminder('popup-reminder-form');
							return false;
						});
						$('#popup-reminder-form-submit').attr('disabled',false);
					});
				</script>
				<form action="<?php echo smarty_function_router(array('page'=>'login'),$_smarty_tpl);?>
reminder/" method="POST" id="popup-reminder-form">
					<p>
					<input type="text" name="mail" placeholder="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_email'];?>
" id="popup-reminder-mail" class="input-text input-width-300" />
					<small class="validate-error-hide validate-error-reminder"></small></p>

					<button type="submit" name="submit_reminder" class="button button-primary" id="popup-reminder-form-submit" disabled="disabled"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['password_reminder_submit'];?>
</button>
				</form>
			</div>
		</div>
	</div>
<?php }?><?php }} ?>