<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRlBizXR\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRlBizXR/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRlBizXR.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRlBizXR\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \ContainerRlBizXR\appAppKernelDevDebugContainer([
    'container.build_hash' => 'RlBizXR',
    'container.build_id' => 'e60f50ea',
    'container.build_time' => 1728133664,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRlBizXR');
