<?php
/**
 * Gleez CMS (http://gleezcms.org)
 *
 * @link      https://github.com/gleez/cms Canonical source repository
 * @copyright Copyright (c) 2011-2015 Gleez Technologies
 * @license   http://gleezcms.org/license Gleez CMS License
 */

namespace Gleez\Tests\Loader\TestLib;

// Grab Autoloadable interface
require_once __DIR__ . '/NewAutoloadable.php';

use Gleez\Loader\Autoloader as Psr4Autoloader;

/**
 * Gleez Autoloader Test
 *
 * @package  Gleez\Loader\UnitTest
 * @author   Gleez Team
 * @version  1.0.2
 */
class Autoloader extends Psr4Autoloader implements NewAutoloadable
{

    /**
     * Gets Autoloader config
     *
     * @return array()
     */
    public function getConfig()
    {
        return array(
            self::LOAD_NS  => $this->getNamespaces(),
            self::LOAD_PR  => $this->getPrefixes(),
            self::FALLBACK => $this->isFallback()
        );
    }
}
