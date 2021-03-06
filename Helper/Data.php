<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2015 Amasty (http://www.amasty.com)
 * @package Amasty_TextoverImages
 */
namespace Amasty\TextoverImages\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENABLE      = 'amasty_textoverimages/general/enable';
    CONST BLOCK_LABEL = 'amasty_textoverimages/general/block_label';
    CONST TEXT_ALIGN  = 'amasty_textoverimages/general/text_align';
	CONST TEXT_FONTFAMILY = 'amasty_textoverimages/general/text_fontfamily';
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

        $this->_scopeConfig = $scopeConfig;
    }

    public function getEnable(){
        return $this->_scopeConfig->getValue(self::ENABLE);
    }

    public function getBlockLabel(){
        return $this->_scopeConfig->getValue(self::BLOCK_LABEL);
    }

    public function getTextAlign(){
        return $this->_scopeConfig->getValue(self::TEXT_ALIGN);
    }
}

