<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHaa1esI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHaa1esI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHaa1esI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHaa1esI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHaa1esI\App_KernelDevDebugContainer([
    'container.build_hash' => 'Haa1esI',
    'container.build_id' => '20168b89',
    'container.build_time' => 1682593210,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHaa1esI');
