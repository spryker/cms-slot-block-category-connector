<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CmsSlotBlockCategoryConnector;

use Generated\Shared\Transfer\CmsSlotBlockTransfer;
use Generated\Shared\Transfer\CmsSlotParamsTransfer;

interface CmsSlotBlockCategoryConnectorClientInterface
{
    /**
     * Specification:
     * - Returns true if CMS slot block condition is applicable.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockTransfer $cmsSlotBlockTransfer
     *
     * @return bool
     */
    public function isSlotBlockConditionApplicable(CmsSlotBlockTransfer $cmsSlotBlockTransfer): bool;

    /**
     * Specification:
     * - Returns true if the CMS block matches the visibility conditions in the Slot.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CmsSlotBlockTransfer $cmsSlotBlockTransfer
     * @param \Generated\Shared\Transfer\CmsSlotParamsTransfer $cmsSlotParamsTransfer
     *
     * @return bool
     */
    public function isCmsBlockVisibleInSlot(
        CmsSlotBlockTransfer $cmsSlotBlockTransfer,
        CmsSlotParamsTransfer $cmsSlotParamsTransfer
    ): bool;
}
