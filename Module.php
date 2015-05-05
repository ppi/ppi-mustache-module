<?php
/**
 * This file is part of the PPI Framework.
 *
 * @category    PPI
 * @package     MustacheModule
 * @copyright   Copyright (c) 2011-2015 Paul Dragoonis <paul@ppi.io>
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        http://www.ppi.io
 */

namespace PPI\MustacheModule;

use PPI\Autoload;
use PPI\Module\AbstractModule;

/**
 * PPI Mustache Module.
 *
 * @author Vítor Brandão <vitor@ppi.io>
 */
class Module extends AbstractModule
{
    const VERSION = '0.0.1-DEV';

    /**
     * {@inheritDoc}
     */
    public function init($e)
    {
        Autoload::add(__NAMESPACE__, dirname(__DIR__));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'PPI\MustacheModule';
    }
}
