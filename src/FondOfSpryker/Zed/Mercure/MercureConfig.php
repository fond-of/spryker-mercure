<?php

namespace FondOfSpryker\Zed\Mercure;

use FondOfSpryker\Shared\Mercure\MercureConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class MercureConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getHubUrl(): string
    {
        return $this->get(MercureConstants::HUB_URL, '');
    }

    /**
     * @return string
     */
    public function getTopic(): string
    {
        return $this->get(MercureConstants::TOPIC, '');
    }

    /**
     * @return string
     */
    public function getJwtKey(): string
    {
        return $this->get(MercureConstants::JWT_KEY, '');
    }

    /**
     * @return float
     */
    public function getAddr(): float
    {
        return $this->get(MercureConstants::ADDR, '');
    }

    /**
     * @return string
     */
    public function allowAnonymous(): string
    {
        return $this->get(MercureConstants::ALLOW_ANONYMOUS, false);
    }

    /**
     * @return string
     */
    public function getCorsAllowedOrigins(): string
    {
        return $this->get(MercureConstants::CORS_ALLOWED_ORIGINS, '');
    }

    /**
     * @return string
     */
    public function getPublishedAllowedOrigins(): string
    {
        return $this->get(MercureConstants::PUBLISH_ALLOWED_ORIGINS, '');
    }
}
