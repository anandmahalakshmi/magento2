<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Model\Page\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\View\Design\Theme\Label\ListInterface;

/**
 * Class Theme
 */
class Theme implements OptionSourceInterface
{
    /**
     * @var \Magento\Framework\View\Design\Theme\Label\ListInterface
     */
    protected $themeList;

    /**
     * Constructor
     *
     * @param ListInterface $themeList
     */
    public function __construct(ListInterface $themeList)
    {
        $this->themeList = $themeList;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        return $options + $this->themeList->getLabels();

    }
}
