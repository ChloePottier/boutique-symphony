<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXoYxujQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXoYxujQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXoYxujQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXoYxujQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXoYxujQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XoYxujQ',
    'container.build_id' => '7cbe2207',
    'container.build_time' => 1586356986,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXoYxujQ');
