<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container57a54nu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container57a54nu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container57a54nu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container57a54nu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container57a54nu\App_KernelDevDebugContainer([
    'container.build_hash' => '57a54nu',
    'container.build_id' => 'b2ee40b3',
    'container.build_time' => 1603640840,
], __DIR__.\DIRECTORY_SEPARATOR.'Container57a54nu');
