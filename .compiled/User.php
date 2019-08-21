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

class User extends Foundation\AbstractActorDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x07554;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"username\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":\"\\/^[ _[:alnum:]]{1,36}$\\/u\",\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":true,\"index\":false}},\"email\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":\"email\"},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":true,\"index\":false}},\"password\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":\"\\/^[0-9A-Za-z!@#$%_]{5,255}$\\/\",\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":true,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"join_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"avatar\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":\"url\"},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"birthday\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"01\\/15\\/1983\",\"unique\":false,\"index\":false}},\"about\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"255\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"is_editor\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":false,\"unique\":false,\"index\":false}},\"custom_field1\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"custom_field2\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"custom_field3\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"\",\"unique\":false,\"index\":false}},\"pending\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":false,\"unique\":false,\"index\":false}},\"pending_verification\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":0,\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "%username% has joined";
    const FEED_AGGREGATED = "%username% have joined";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Lib\Graph\GraphInterface $graph , string $username, string $email, string $password, ?string $avatar = "", ?string $birthday = "01/15/1983", ?string $about = "", ?bool $is_editor = false, ?string $custom_field1 = "", ?string $custom_field2 = "", ?string $custom_field3 = "", ?bool $pending = false, ?int $pending_verification = 0)
    {
        $this->registerIncomingEdges(UserOut\Follow::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        $this->registerIncomingEdges(UserOut\Message::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Post::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Post::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Star::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Star::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Comment::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Comment::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Consume::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Consume::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Message::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Message::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Create::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Create::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Follow::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Follow::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Start::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Start::class);
        if(class_exists(\PhoNetworksAutogenerated\Edges\Reply::class))
            $this->registerOutgoingEdges(\PhoNetworksAutogenerated\Edges\Reply::class);
        parent::__construct($kernel, $graph);
                $this->setUsername($username, true);
        $this->setEmail($email, true);
        $this->setPassword($password, true);
        $this->setJoinTime(time(), true);
        $this->setAvatar($avatar, true);
        $this->setBirthday(strtotime($birthday), true);
        $this->setAbout($about, true);
        $this->setIsEditor($is_editor, true);
        $this->setCustomField1($custom_field1, true);
        $this->setCustomField2($custom_field2, true);
        $this->setCustomField3($custom_field3, true);
        $this->setPending($pending, true);
        $this->setPendingVerification($pending_verification, true);

        $this->persist();
        $this->context()->emit("particle.formed", [$this]);
    }

}

/*****************************************************
 * Timestamp: 1566387941
 * Size (in bytes): 7386
 * Compilation Time: 21
 * a23267d1b821c093fa88e112a99f76a7
 ******************************************************/