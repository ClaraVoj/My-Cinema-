<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._gyvIPn' shared service.

return $this->privates['.service_locator._gyvIPn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'membreRepo' => ['privates', 'App\\Repository\\MembreRepository', 'getMembreRepositoryService.php', true],
], [
    'membreRepo' => 'App\\Repository\\MembreRepository',
]);
