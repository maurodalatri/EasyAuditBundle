<?php

/*
 * This file is part of the XiideaEasyAuditBundle package.
 *
 * (c) Xiidea <http://www.xiidea.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\EasyAuditBundle\Tests\Fixtures\Event;


use FOS\UserBundle\Event\UserEvent;
use Xiidea\EasyAuditBundle\Tests\Fixtures\ORM\UserEntity;

class DummyUserEvent extends UserEvent
{
    private $user;

    public function __construct(UserEntity $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

}