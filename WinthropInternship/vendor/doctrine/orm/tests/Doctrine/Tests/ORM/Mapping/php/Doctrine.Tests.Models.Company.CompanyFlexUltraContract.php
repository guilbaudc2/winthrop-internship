<?php

$metadata->mapField(array(
    'type'      => 'integer',
    'name'      => 'maxPrice',
    'fieldName' => 'maxPrice',
));
$metadata->addEntityListener(\Doctrine\ORM\Events::postPersist, 'CompanyContractListener', 'postPersistHandler');
$metadata->addEntityListener(\Doctrine\ORM\Events::prePersist, 'CompanyContractListener', 'prePersistHandler');

$metadata->addEntityListener(\Doctrine\ORM\Events::postUpdate, 'CompanyContractListener', 'postUpdateHandler');
$metadata->addEntityListener(\Doctrine\ORM\Events::preUpdate, 'CompanyContractListener', 'preUpdateHandler');

$metadata->addEntityListener(\Doctrine\ORM\Events::postRemove, 'CompanyContractListener', 'postRemoveHandler');
$metadata->addEntityListener(\Doctrine\ORM\Events::preRemove, 'CompanyContractListener', 'preRemoveHandler');

$metadata->addEntityListener(\Doctrine\ORM\Events::preFlush, 'CompanyContractListener', 'preFlushHandler');
$metadata->addEntityListener(\Doctrine\ORM\Events::postLoad, 'CompanyContractListener', 'postLoadHandler');

$metadata->addEntityListener(\Doctrine\ORM\Events::prePersist, 'CompanyFlexUltraContractListener', 'prePersistHandler1');
$metadata->addEntityListener(\Doctrine\ORM\Events::prePersist, 'CompanyFlexUltraContractListener', 'prePersistHandler2');