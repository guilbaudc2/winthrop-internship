<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6xfalxh\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6xfalxh/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container6xfalxh.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container6xfalxh\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container6xfalxh\appDevDebugProjectContainer(array(
    'container.build_hash' => '6xfalxh',
    'container.build_id' => 'ae8c176f',
    'container.build_time' => 1523755837,
));
