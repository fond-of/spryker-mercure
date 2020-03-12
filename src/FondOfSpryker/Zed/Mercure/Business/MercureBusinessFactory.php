<?php

namespace FondOfSpryker\Zed\Mercure\Business;

use FondOfSpryker\Zed\Mercure\Business\Model\Publisher;
use FondOfSpryker\Zed\Mercure\Business\Model\PublisherInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Symfony\Component\Mercure\Jwt\StaticJwtProvider;
use Symfony\Component\Mercure\Publisher as SymfonyPublisher;

/**
 * @method \FondOfSpryker\Zed\Mercure\MercureConfig getConfig()
 */
class MercureBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\Mercure\Business\Model\PublisherInterface
     */
    public function createPublisher(): PublisherInterface
    {
        return new Publisher(
            $this->createSymfonyPublisher(),
            $this->getConfig()
        );
    }

    /**
     * @return \Symfony\Component\Mercure\Publisher
     */
    protected function createSymfonyPublisher(): SymfonyPublisher
    {
        return new SymfonyPublisher(
            $this->getConfig()->getHubUrl(),
            $this->createJwtProvider()
        );
    }

    /**
     * @return \Symfony\Component\Mercure\Jwt\StaticJwtProvider
     */
    protected function createJwtProvider(): StaticJwtProvider
    {
        return new StaticJwtProvider($this->getConfig()->getJwtKey());
    }
}
