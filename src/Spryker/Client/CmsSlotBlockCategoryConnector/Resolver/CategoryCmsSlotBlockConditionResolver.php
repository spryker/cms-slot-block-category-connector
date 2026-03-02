<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CmsSlotBlockCategoryConnector\Resolver;

use Generated\Shared\Transfer\CmsSlotBlockTransfer;
use Generated\Shared\Transfer\CmsSlotParamsTransfer;
use Spryker\Shared\CmsSlotBlockCategoryConnector\CmsSlotBlockCategoryConnectorConfig;

class CategoryCmsSlotBlockConditionResolver implements CategoryCmsSlotBlockConditionResolverInterface
{
    public function isSlotBlockConditionApplicable(CmsSlotBlockTransfer $cmsSlotBlockTransfer): bool
    {
        return $cmsSlotBlockTransfer->getConditions()
            ->offsetExists(CmsSlotBlockCategoryConnectorConfig::CONDITION_KEY);
    }

    public function isCmsBlockVisibleInSlot(
        CmsSlotBlockTransfer $cmsSlotBlockTransfer,
        CmsSlotParamsTransfer $cmsSlotParamsTransfer
    ): bool {
        /** @var \Generated\Shared\Transfer\CmsSlotBlockConditionTransfer $cmsSlotBlockConditionTransfer */
        $cmsSlotBlockConditionTransfer = $cmsSlotBlockTransfer->getConditions()
            ->offsetGet(CmsSlotBlockCategoryConnectorConfig::CONDITION_KEY);

        if ($cmsSlotBlockConditionTransfer->getAll()) {
            return true;
        }

        return $cmsSlotParamsTransfer->getIdCategory()
            && in_array($cmsSlotParamsTransfer->getIdCategory(), $cmsSlotBlockConditionTransfer->getCategoryIds());
    }
}
