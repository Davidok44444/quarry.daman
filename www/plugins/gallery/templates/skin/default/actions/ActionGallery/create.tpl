{include file='header.tpl' menu='blog'}
<h1 class="gallery-header"><a href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a>/<a href="{$albumUrl}index/{$oUserProfile->getId()}">Фотоальбомы</a>/Добавить альбом</h1>

<form method="POST" action="{$albumUrl}create">
<br/>
 <p> Заголовок:
    <input type="text" name="name">
</p>    
<input type=submit value="Сохранить">
</form>
{include file='footer.tpl'}