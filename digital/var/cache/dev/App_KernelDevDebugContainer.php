<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOLaLZ6E\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOLaLZ6E/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOLaLZ6E.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOLaLZ6E\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOLaLZ6E\App_KernelDevDebugContainer([
    'container.build_hash' => 'OLaLZ6E',
    'container.build_id' => '5156fd8f',
    'container.build_time' => 1637406161,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOLaLZ6E');
