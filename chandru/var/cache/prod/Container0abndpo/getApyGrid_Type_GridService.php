<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'apy_grid.type.grid' shared service.

include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/GridTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Type/GridType.php';

return $this->services['apy_grid.type.grid'] = new \APY\DataGridBundle\Grid\Type\GridType();
