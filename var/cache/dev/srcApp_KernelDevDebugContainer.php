<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPZgc6e7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPZgc6e7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPZgc6e7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPZgc6e7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerPZgc6e7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'PZgc6e7',
    'container.build_id' => '9315f18c',
    'container.build_time' => 1586329920,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPZgc6e7');
