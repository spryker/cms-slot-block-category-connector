<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CmsSlotBlockCategoryConnector;

use Spryker\Client\CmsSlotBlockCategoryConnector\Resolver\CategoryCmsSlotBlockConditionResolver;
use Spryker\Client\CmsSlotBlockCategoryConnector\Resolver\CategoryCmsSlotBlockConditionResolverInterface;
use Spryker\Client\Kernel\AbstractFactory;

class CmsSlotBlockCategoryConnectorFactory extends AbstractFactory
{
    public function createCategoryCmsSlotBlockConditionResolver(): CategoryCmsSlotBlockConditionResolverInterface
    {
        return new CategoryCmsSlotBlockConditionResolver();
    }
}
