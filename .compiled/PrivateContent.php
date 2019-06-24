<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class PrivateContent extends Foundation\AbstractObjectDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x0f750;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $content)
    {
        $this->registerIncomingEdges(UserOut\Post::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setCreateTime(time(), true);
        $this->setContent($content, true);

        $this->persist();
        $this->context()->emit("particle.formed", [$this]);
    }

}

/*****************************************************
 * Timestamp: 1561344996
 * Size (in bytes): 2025
 * Compilation Time: 17
 * 5f9770b15f5811290db1c95789f97ded
 ******************************************************/