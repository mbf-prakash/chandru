<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'grid.column.text' shared service.

include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Column/Column.php';
include_once $this->targetDirs[3].'/vendor/apy/datagrid-bundle/Grid/Column/TextColumn.php';

return $this->services['grid.column.text'] = new \APY\DataGridBundle\Grid\Column\TextColumn();
