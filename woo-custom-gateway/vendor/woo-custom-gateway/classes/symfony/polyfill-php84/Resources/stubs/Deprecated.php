<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (\PHP_VERSION_ID < 80400) {
    #[WooCustomGateway_Attribute(Attribute::TARGET_METHOD | WooCustomGateway_Attribute::TARGET_FUNCTION | WooCustomGateway_Attribute::TARGET_CLASS_CONSTANT)]
    final class WooCustomGateway_Deprecated
    {
        public readonly ?string $message;
        public readonly ?string $since;

        public function __construct(?string $message = null, ?string $since = null)
        {
            $this->message = $message;
            $this->since = $since;
        }
    }
}
