<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBd0x5aU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBd0x5aU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBd0x5aU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBd0x5aU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBd0x5aU\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bd0x5aU',
    'container.build_id' => '26faaba2',
    'container.build_time' => 1588266120,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBd0x5aU');