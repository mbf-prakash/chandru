<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'apy_grid.factory' shared service.

include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/GridFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/GridFactory.php';

return $this->services['apy_grid.factory'] = new \APY\DataGridBundle\Grid\GridFactory($this, ${($_ = isset($this->services['apy_grid.registry']) ? $this->services['apy_grid.registry'] : $this->load('getApyGrid_RegistryService.php')) && false ?: '_'});
