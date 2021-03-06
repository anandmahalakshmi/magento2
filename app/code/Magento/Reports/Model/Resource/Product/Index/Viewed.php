<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Reports Viewed Product Index Resource Model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
namespace Magento\Reports\Model\Resource\Product\Index;

class Viewed extends \Magento\Reports\Model\Resource\Product\Index\AbstractIndex
{
    /**
     * Initialize connection and main resource table
     *
     * @return void
     * @codeCoverageIgnore
     */
    protected function _construct()
    {
        $this->_init('report_viewed_product_index', 'index_id');
    }
}
