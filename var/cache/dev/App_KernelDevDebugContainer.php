<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP4oHawR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP4oHawR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP4oHawR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP4oHawR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerP4oHawR\App_KernelDevDebugContainer([
    'container.build_hash' => 'P4oHawR',
    'container.build_id' => '56ad8cb2',
    'container.build_time' => 1582551716,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP4oHawR');
