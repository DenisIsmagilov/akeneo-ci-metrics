<?php

declare(strict_types=1);

namespace App\Model\Jenkins\Build;

/**
 * Represents the API URI of a build.
 *
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class BuildUri
{
    /** @var string */
    private $uri;

    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    public function value(): string
    {
        return $this->uri;
    }
}
