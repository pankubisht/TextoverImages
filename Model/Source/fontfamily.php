<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (http://www.amasty.com)
 * @package Amasty_TextoverImages
 */
namespace Amasty\TextoverImages\Model\Source;

class Fontfamily implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'font-awesome',
                'label' => __('font-awesome')
            ),
            array(
                'value' => 'Times New Roman',
                'label' => __('Times New Roman')
            )
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ['left' => __('Left Position'),
                'center' => __('Center Position'),
				'top' => __('Top Position'),
				'Right' => __('Right Position'),
				'bottom' =>__('Bottom Position')
        ];
    }
}