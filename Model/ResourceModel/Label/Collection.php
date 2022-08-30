<?php

namespace Magecat\Label\Model\ResourceModel\Label;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\Magecat\Label\Model\Label::class, \Magecat\Label\Model\ResourceModel\Label::class);
    }
}
