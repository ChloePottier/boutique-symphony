<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIK6MpIf\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIK6MpIf/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIK6MpIf.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIK6MpIf\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIK6MpIf\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IK6MpIf',
    'container.build_id' => '3bd50fa7',
    'container.build_time' => 1586855234,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIK6MpIf');
