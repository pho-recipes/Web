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

class Consume extends Foundation\ActorOut\Read {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "read";
    const HEAD_LABELS = "reads";
    const TAIL_LABEL = "reader";
    const TAIL_LABELS = "readers";
    
    const TAIL_CALLABLE_LABEL = "";
    const TAIL_CALLABLE_LABELS = "";
    const HEAD_CALLABLE_LABEL = "";
    const HEAD_CALLABLE_LABELS = "";

    const FEED_SIMPLE_LABEL = "";
    const FEED_AGGREGATED_LABEL = "";
    

    const SETTABLES_EXTRA = [\PhoNetworksAutogenerated\User::class,\PhoNetworksAutogenerated\Page::class,\PhoNetworksAutogenerated\Group::class,\PhoNetworksAutogenerated\Blog::class,\PhoNetworksAutogenerated\PrivateContent::class];
    


}

/* Predicate to load as a partial */
class ConsumePredicate extends Foundation\ActorOut\ReadPredicate
{
    protected $binding = false;
    protected $multiplicable = true;
    
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
 * Size (in bytes): 1658
 * Compilation Time: 5
 * 7750e57b8c8302d80c2d33429eb2176d
 ******************************************************/