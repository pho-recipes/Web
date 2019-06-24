<?php

namespace PhoNetworksAutogenerated\UserOut 
{

use Pho\Kernel\Traits\Edge\PersistentTrait;
use Pho\Framework;
use Pho\Kernel\Foundation;



/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Comment extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "commentedPage";
    const HEAD_LABELS = "commentedPages";
    const TAIL_LABEL = "commenter";
    const TAIL_LABELS = "commenters";
    
    const TAIL_CALLABLE_LABEL = "comment";
    const TAIL_CALLABLE_LABELS = "comments";
    const HEAD_CALLABLE_LABEL = "comment";
    const HEAD_CALLABLE_LABELS = "comments";

    const FEED_SIMPLE_LABEL = "[%tail.username%|%tail.id%] commented on an item";
    const FEED_AGGREGATED_LABEL = "%tail.username% commented on %count(head)% pages";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\Page::class,\PhoNetworksAutogenerated\Blog::class];
    

    const FIELDS = "{\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"pending\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":false,\"unique\":false,\"index\":false}},\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

}

/* Predicate to load as a partial */
class CommentPredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
    const T_CONSUMER = false;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class CommentNotification extends Foundation\ActorOut\SubscribeNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 2644
 * Compilation Time: 27
 * a5af36ca4298c5a7023acf350bdcaeb3
 ******************************************************/