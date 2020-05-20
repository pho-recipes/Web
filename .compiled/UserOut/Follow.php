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

class Follow extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "follow";
    const HEAD_LABELS = "follows";
    const TAIL_LABEL = "follower";
    const TAIL_LABELS = "followers";
    
    const TAIL_CALLABLE_LABEL = "";
    const TAIL_CALLABLE_LABELS = "";
    const HEAD_CALLABLE_LABEL = "";
    const HEAD_CALLABLE_LABELS = "";

    const FEED_SIMPLE_LABEL = "[%tail.username%|%tail.id%] followed [%head.username%|%head.id%]";
    const FEED_AGGREGATED_LABEL = "%tail.username% followed %head.username%";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class];
    


}

/* Predicate to load as a partial */
class FollowPredicate extends Foundation\ActorOut\SubscribePredicate
{
    protected $binding = false;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = false;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class FollowNotification extends Foundation\ActorOut\SubscribeNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1695
 * Compilation Time: 5
 * 1ee188078574f6fcff5ff77911193b1f
 ******************************************************/