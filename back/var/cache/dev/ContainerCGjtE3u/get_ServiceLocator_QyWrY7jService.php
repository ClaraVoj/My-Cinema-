<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.QyWrY7j' shared service.

return $this->privates['.service_locator.QyWrY7j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'historiqueMembre' => ['privates', 'App\\Repository\\HistoriqueMembreRepository', 'getHistoriqueMembreRepositoryService.php', true],
    'rFilm' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService.php', true],
], [
    'historiqueMembre' => 'App\\Repository\\HistoriqueMembreRepository',
    'rFilm' => 'App\\Repository\\FilmRepository',
]);
