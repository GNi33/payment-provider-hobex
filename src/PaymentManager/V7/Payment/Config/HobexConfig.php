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

namespace Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\V7\Payment\Config;

class HobexConfig
{
    protected string $entityId = '';

    protected string $authorizationBearer = '';

    protected bool $testSystem = false;

    protected string $hostURL = '';

    protected array $paymentMethods = [];

    protected ?string $webhookSecret;

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function setEntityId(string $entityId): self
    {
        $this->entityId = $entityId;

        return $this;
    }

    public function getAuthorizationBearer(): string
    {
        return $this->authorizationBearer;
    }

    public function setAuthorizationBearer(string $authorizationBearer): self
    {
        $this->authorizationBearer = $authorizationBearer;

        return $this;
    }

    public function isTestSystem(): bool
    {
        return $this->testSystem;
    }

    public function setTestSystem(bool $testSystem): self
    {
        $this->testSystem = $testSystem;

        return $this;
    }

    public function getHostURL(): string
    {
        return $this->hostURL;
    }

    public function setHostURL(string $hostURL): self
    {
        $this->hostURL = $hostURL;

        return $this;
    }

    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    /**
     * @param array<string> $paymentMethods
     */
    public function setPaymentMethods(array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;

        return $this;
    }

    public function getWebhookSecret(): ?string
    {
        return $this->webhookSecret;
    }

    public function setWebhookSecret(?string $webhookSecret): self
    {
        $this->webhookSecret = $webhookSecret;

        return $this;
    }
}
