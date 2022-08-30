<?php

namespace Magecat\Label\Model;

use Magento\Framework\Model\AbstractModel;

class Label extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Magecat\Label\Model\ResourceModel\Label::class);
    }
}
