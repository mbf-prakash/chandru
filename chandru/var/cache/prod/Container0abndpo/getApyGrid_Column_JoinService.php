<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'apy_grid.column.join' shared service.

include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Column/Column.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Column/TextColumn.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Column/JoinColumn.php';

return $this->services['apy_grid.column.join'] = new \APY\DataGridBundle\Grid\Column\JoinColumn();
