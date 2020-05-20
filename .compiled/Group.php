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

class Group extends Foundation\AbstractGraphDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x1f751;
    const DEFAULT_MASK = 0xff999;

    const FIELDS = "{\"title\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"80\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"description\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"cover\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":\"url\"},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $title, string $description, ?string $cover = "")
    {
        $this->registerIncomingEdges(UserOut\Create::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setTitle($title, true);
        $this->setDescription($description, true);
        $this->setCover($cover, true);
        $this->setCreateTime(time(), true);

        $this->persist();
        $this->context()->emit("particle.formed", [$this]);
    }

}

/*****************************************************
 * Timestamp: 1589938831
 * Size (in bytes): 2699
 * Compilation Time: 7
 * c9c2627d6d6e49e70ea91c6c58eb88e4
 ******************************************************/