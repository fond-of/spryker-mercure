<?php

namespace FondOfSpryker\Zed\Mercure\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;

interface MercureFacadeInterface
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
