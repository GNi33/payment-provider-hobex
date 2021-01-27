<?php

/**
 * Pimcore
 *
 * This source file is available under following license:
 * - Pimcore Enterprise License (PEL)
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     PEL
 */
namespace Pimcore\Bundle\EcommerceFrameworkBundle\Hobex;

use Pimcore\Bundle\EcommerceFrameworkBundle\Tools\PaymentProviderInstaller;

class Installer extends PaymentProviderInstaller
{
    protected $bricksPath = __DIR__ . '/../../install/objectbrick_sources/';

    protected $bricksToInstall = [
        'PaymentProviderDatatrans' => 'objectbrick_PaymentProviderOGone_export.json'
    ];
}
