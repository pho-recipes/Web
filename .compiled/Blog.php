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

class Blog extends Foundation\AbstractObjectDP {

    const T_EDITABLE = true;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x0f754;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"title\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"content\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"last_edit_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"publish_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"0\",\"unique\":false,\"index\":false}},\"is_pinned\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":false,\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $title, string $content, ?string $publish_time = "0", ?bool $is_pinned = false)
    {
        $this->registerIncomingEdges(UserOut\Comment::class);
        $this->registerIncomingEdges(UserOut\Star::class);
        $this->registerIncomingEdges(UserOut\Post::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setTitle($title, true);
        $this->setContent($content, true);
        $this->setCreateTime(time(), true);
        $this->setLastEditTime(time(), true);
        $this->setPublishTime(strtotime($publish_time), true);
        $this->setIsPinned($is_pinned, true);

        $this->persist();
        $this->context()->emit("particle.formed", [$this]);
    }

}

/*****************************************************
 * Timestamp: 1566024944
 * Size (in bytes): 3520
 * Compilation Time: 46
 * 760b69b8775cffb556783a48e7f81fd5
 ******************************************************/