<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMbbVGyJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMbbVGyJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMbbVGyJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMbbVGyJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMbbVGyJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'MbbVGyJ',
    'container.build_id' => 'f71e2596',
    'container.build_time' => 1637637035,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMbbVGyJ');