<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSuibx8i\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSuibx8i/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerSuibx8i.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerSuibx8i\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerSuibx8i\App_KernelProdContainer([
    'container.build_hash' => 'Suibx8i',
    'container.build_id' => '5965c36d',
    'container.build_time' => 1642441431,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSuibx8i');
