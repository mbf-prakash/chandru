<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'apy_grid.column.array' shared service.

include_once $this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle\\Grid\\Column\\Column.php';
include_once $this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle\\Grid\\Column\\ArrayColumn.php';

return $this->services['apy_grid.column.array'] = new \APY\DataGridBundle\Grid\Column\ArrayColumn();
