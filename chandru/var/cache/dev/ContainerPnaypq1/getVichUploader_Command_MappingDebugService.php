<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.command.mapping_debug' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Command\\MappingDebugCommand.php';

$this->services['vich_uploader.command.mapping_debug'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugCommand($this->getParameter('vich_uploader.mappings'));

$instance->setName('vich:mapping:debug');

return $instance;