<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.bzczM7g' shared service.

return $this->privates['.service_locator.bzczM7g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'filmRepos' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService.php', true],
], [
    'filmRepos' => 'App\\Repository\\FilmRepository',
]);