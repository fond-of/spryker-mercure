<?php

namespace FondOfSpryker\Zed\Mercure\Business;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\Mercure\Business\MercureBusinessFactory getFactory()
 */
class MercureFacade extends AbstractFacade implements MercureFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function publishProductAbstract(
        ProductAbstractTransfer $productAbstractTransfer
    ): ProductAbstractTransfer {

        return $this->getFactory()->createPublisher()->publishProductAbstract($productAbstractTransfer);
    }
}
