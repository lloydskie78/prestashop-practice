<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUqmcqf3\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUqmcqf3/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerUqmcqf3.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerUqmcqf3\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerUqmcqf3\appProdProjectContainer([
    'container.build_hash' => 'Uqmcqf3',
    'container.build_id' => '0dea9e37',
    'container.build_time' => 1613366832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUqmcqf3');