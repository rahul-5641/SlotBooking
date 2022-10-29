<?php

namespace Projectoct\Project\Model\ResourceModel\Slot;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Projectoct\Project\Model\Slot as Model;
use Projectoct\Project\Model\ResourceModel\Slot as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
