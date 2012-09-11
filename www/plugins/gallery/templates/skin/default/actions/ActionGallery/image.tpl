{include file='header.tpl'}


<h1 class="gallery-header"><a href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a>/<a href="{$albumUrl}index/{$oUserProfile->getId()}">Фотоальбомы</a>/<a href="{$albumUrl}album/{$image.album_id}">{$image.album}</a></h1>
 
<a href="{$albumUrl}image/{$image.next.id}"><img src="{$imagesUrl}preview/{$image.id}-{$image.nh}.jpg" style="max-width:650px;"></a>
<div class="topic">
<footer class="topic-footer">
    <div id="description-image">
        
        {if $image.name}
            {$image.name}
                    {elseif $oUserCurrent && $image.user_id == $oUserCurrent->getId()}
                Добавить описание
        {/if}

        
    </div>
         <input type="hidden" id="user-id" value="{$image.user_id}">
        <input type="hidden" id="uid" value="{$uid}">
        <input type="hidden" id="des-name-img" value="{$image.name}">
    <div id="description-edit" style="display: none;">
       
        <input type="hidden" id="img-id" value="{$image.id}">

        <p id="sub-name">Сохранить</p>
    </div>

    <br/><br/>
<ul class="topic-info">
			 <li class="topic-info-author"><a rel="author" href="{$oUserProfile->getUserWebPath()}">{$oUserProfile->getLogin()}</a></li>
		

  	<li class="topic-info-date">
				<time datetime="{date_format date=$image['date'] format='c'}" title="{date_format date=$image['date'] format='j F Y, H:i'}">
					{date_format date=$image['date'] hours_back="12" minutes_back="60" now="60" day="day H:i" format="j F Y, H:i"}
				</time>
	</li>
        {if $oUserCurrent && $image.user_id == $oUserCurrent->getId()}
        <li><a href="{$albumUrl}delete/{$image.id}">Удалить</a></li>
            {if $image.id != $album.image_id}
                <li><a href="{$albumUrl}preview/{$image.id}">Cделать обложкой альбома</a></li>
            {/if}
	{/if}
        <li class="topic-info-vote">
				<div id="vote_area_image_{$image.id}" class="vote-topic
                    {if $oVote || ($oUserCurrent && $image.user_id == $oUserCurrent->getId()) || strtotime($image.date) < $smarty.now-$oConfig->GetValue('acl.vote.topic.limit_time')}
                            {if $image.rating > 0}
                                    vote-count-positive
                                        {elseif $image.rating < 0}
                                    vote-count-negative
                                        {elseif $image.rating == 0}
                                    vote-count-zero
                            {/if}
                    {/if}

                    {if !$oUserCurrent or ($oUserCurrent && $image.user_id != $oUserCurrent->getId())}
                            vote-not-self
                    {/if}

                    {if $oVote} 
                            voted

                            {if $oVote->getDirection() > 0}
                                    voted-up
                            {elseif $oVote->getDirection() < 0}
                                    voted-down
                            {elseif $oVote->getDirection() == 0}
                                    voted-zero
                            {/if}
                    {else}
                            not-voted
                    {/if}
           
                    {if $bVoteInfoShow}js-infobox-vote-topic{/if}">
                
                <div class="vote-item vote-down" onclick="return ls.vote.vote({$image.id},this,-1,'image');"><span><i></i></span></div>
                <div class="vote-item vote-count" title="{$aLang.blog_vote_count}: {$image['count_vote']}">
                        <span id="vote_total_image_{$image.id}">
                                {if $bVoteInfoShow}
                                        {if $image.rating > 0}+{/if}{$image.rating}
                                {else}
                                        <i onclick="return ls.vote.vote({$image.id},this,0,'image');"></i>
                                {/if}
                        </span>
                </div>
                <div class="vote-item vote-up" onclick="return ls.vote.vote({$image.id},1,1,'image');"><span><i></i></span></div>
                {if $bVoteInfoShow}
                        <div id="vote-info-image-{$image.id}" style="display: none;">
                                <ul class="vote-topic-info">
                                        <li><i class="icon-synio-vote-info-up"></i> {$image.count_vote_up}</li>
                                        <li><i class="icon-synio-vote-info-down"></i> {$image.count_vote_down}</li>
                                        <li><i class="icon-synio-vote-info-zero"></i> {$image.count_vote_abstain}</li>
                                        
                                </ul>
                        </div>
                {/if}
                
                
	</div>
     </li>
     
</ul>
</footer>
 </div>
 
 <div id="image-comments">
{include file='comment_tree.tpl' 
iTargetId=$id
iAuthorId=$image.user_id
sAuthorNotice=$uid
sTargetType='image'
iCountComment=$count_comments
sAuthorNotice=$aLang.topic_author
sNoticeNotAllow=$aLang.topic_comment_notallow
sNoticeCommentAdd=$aLang.topic_comment_add
sDateReadLast='2012-08-22 17:42:17'
iMaxIdComment=$iMaxIdComment
}
</div>
        
{include file='footer.tpl'}