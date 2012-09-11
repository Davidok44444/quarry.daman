{include file='header.tpl' menu='blog'}


<h1 class="gallery-header"><a href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a>/Фотоальбомы</h1>


<div class="albums">
<ul style="width:700px;">
{foreach from=$albums item=album}
  <li style="display:inline-block;">
      {if $album.image}
          <a href="{$albumUrl}album/{$album.id}"><img src="{$imagesUrl}preview/{$album.image.id}-{$album.image.nh}.jpg" style="max-width:264px"></a><br/>
      {else}
          <a href="{$albumUrl}album/{$album.id}"><div class="album-a" style="margin: auto;"></div></a><br/>
      {/if}
      <a href="{$albumUrl}album/{$album.id}">{$album.name}</a>
     
  </li>  
{/foreach}
{if $oUserCurrent && $oUserCurrent->getId() == $pid}
    <li style="display:inline-block;">
        <a href="{$albumUrl}create/"><div class="album-add" style="margin: auto;"></div></a>
        <a href="{$albumUrl}create/">Добавить альбом</a>

    </li>
{/if}
</ul>
</div>
{include file='footer.tpl'}