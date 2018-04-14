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

class Star extends Foundation\ActorOut\Subscribe {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "starred";
    const HEAD_LABELS = "starreds";
    const TAIL_LABEL = "starrer";
    const TAIL_LABELS = "starrers";
    
    const TAIL_CALLABLE_LABEL = "";
    const TAIL_CALLABLE_LABELS = "";
    const HEAD_CALLABLE_LABEL = "";
    const HEAD_CALLABLE_LABELS = "";

    const FEED_SIMPLE_LABEL = "";
    const FEED_AGGREGATED_LABEL = "";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\Page::class];
    


}

/* Predicate to load as a partial */
class StarPredicate extends Foundation\ActorOut\SubscribePredicate
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

}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1508
 * Compilation Time: 9
 * 16b210fff7d94a5b39d913c303d3f44c
 ******************************************************/