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

class Create extends Foundation\ActorOut\Write {

    
    use PersistentTrait;
    

    const HEAD_LABEL = "group";
    const HEAD_LABELS = "groups";
    const TAIL_LABEL = "creator";
    const TAIL_LABELS = "creators";
    
    const TAIL_CALLABLE_LABEL = "";
    const TAIL_CALLABLE_LABELS = "";
    const HEAD_CALLABLE_LABEL = "";
    const HEAD_CALLABLE_LABELS = "";

    const FEED_SIMPLE_LABEL = "[%tail.username%|%tail.id%] created a new group called [%head.title%|%head.id%]";
    const FEED_AGGREGATED_LABEL = "%tail.username% created new groups";
    

    const FORMABLES = [\PhoNetworksAutogenerated\Group::class];
    


}

/* Predicate to load as a partial */
class CreatePredicate extends Foundation\ActorOut\WritePredicate
{
    protected $binding = true;
    protected $multiplicable = false;
    
    const T_CONSUMER = true;
    const T_NOTIFIER = false;
    const T_SUBSCRIBER = false;
    const T_FORMATIVE = true;
    const T_PERSISTENT = true;
}
/* Notification to load if it's a subtype of write or mention. */
class CreateNotification extends Foundation\ActorOut\WriteNotification
{

}
}

/*****************************************************
 * Timestamp: 
 * Size (in bytes): 1682
 * Compilation Time: 30
 * 1ee092967df61c551a664ad3a4f8b0ed
 ******************************************************/