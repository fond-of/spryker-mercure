<?php

namespace FondOfSpryker\Zed\Mercure\Business\Model;

use FondOfSpryker\Zed\Mercure\MercureConfig;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Symfony\Component\Mercure\Publisher as SymfonyPublisher;
use Symfony\Component\Mercure\Update as SymfonyUpdate;

class Publisher implements PublisherInterface
{
    /**
     * @var \Symfony\Component\Mercure\Publisher
     */
    protected $publisher;

    /**
     * @var \FondOfSpryker\Zed\Mercure\MercureConfig
     */
    protected $config;

    /**
     * @param \Symfony\Component\Mercure\Publisher $publisher
     * @param \FondOfSpryker\Zed\Mercure\MercureConfig $config
     */
    public function __construct(
        SymfonyPublisher $publisher,
        MercureConfig $config
    ) {
        $this->publisher = $publisher;
        $this->config = $config;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function publishProductAbstract(
        ProductAbstractTransfer $productAbstractTransfer
    ): ProductAbstractTransfer {

        $this->publisher->__invoke(
            $this->getUpdate($productAbstractTransfer)
        );

        return $productAbstractTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Symfony\Component\Mercure\Update
     */
    protected function getUpdate(ProductAbstractTransfer $productAbstractTransfer): SymfonyUpdate
    {
        return new SymfonyUpdate(
            $this->config->getTopic(),
            $productAbstractTransfer->getSku()
        );
    }
}
