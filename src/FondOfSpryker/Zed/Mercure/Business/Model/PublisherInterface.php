<?php

namespace FondOfSpryker\Zed\Mercure\Business\Model;

use Generated\Shared\Transfer\ProductAbstractTransfer;

interface PublisherInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function publishProductAbstract(
        ProductAbstractTransfer $productAbstractTransfer
    ): ProductAbstractTransfer;
}
