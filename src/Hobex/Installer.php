<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\Hobex;

use Pimcore\Bundle\EcommerceFrameworkBundle\Tools\PaymentProviderInstaller;

class Installer extends PaymentProviderInstaller
{
    protected string $bricksPath = __DIR__ . '/../../install/objectbrick_sources/';

    protected array $bricksToInstall = [
        'PaymentProviderHobex' => 'objectbrick_PaymentProviderHobex_export.json'
    ];
}
