<?php

/*
 * This file is part of fof/upload.
 *
 * Copyright (c) 2020 - 2021 FriendsOfFlarum.
 * Copyright (c) 2016 - 2019 Flagrow
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FoF\Upload\Events\Adapter;

use FoF\Upload\Helpers\Util;

class Instantiate
{
    /** @var string */
    public $adapter;
    /** @var Util */
    public $util;

    public function __construct(string $adapter, Util $util)
    {
        $this->adapter = $adapter;
        $this->util = $util;
    }
}
