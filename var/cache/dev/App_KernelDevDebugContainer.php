<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMcjK5s6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMcjK5s6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMcjK5s6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMcjK5s6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMcjK5s6\App_KernelDevDebugContainer([
    'container.build_hash' => 'McjK5s6',
    'container.build_id' => '15a636a8',
    'container.build_time' => 1606513793,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMcjK5s6');
