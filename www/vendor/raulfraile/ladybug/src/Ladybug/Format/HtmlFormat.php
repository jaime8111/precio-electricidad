<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Format;

class HtmlFormat implements FormatInterface
{

    const FORMAT_NAME = 'html';

    /**
     * Gets format name
     *
     * @return string
     */
    public function getName()
    {
        return self::FORMAT_NAME;
    }

}
