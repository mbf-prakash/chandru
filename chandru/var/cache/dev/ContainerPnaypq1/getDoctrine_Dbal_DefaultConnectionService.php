<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Driver\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\LoggerChain.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\event-manager\\lib\\Doctrine\\Common\\EventSubscriber.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\BaseListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\CleanListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Adapter\\AdapterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Adapter\\ORM\\DoctrineORMAdapter.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Doctrine\\UserListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\RemoveListener.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\EventListener\\Doctrine\\UploadListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\Tools\\AttachEntityListenersListener.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\ConnectionFactory.php';

$a = new \Doctrine\DBAL\Configuration();
$b = new \Doctrine\DBAL\Logging\LoggerChain();
$b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->load('getMonolog_Logger_DoctrineService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
$b->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

$a->setSQLLogger($b);

$c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
$d = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
$e = ${($_ = isset($this->services['vich_uploader.metadata_reader']) ? $this->services['vich_uploader.metadata_reader'] : $this->getVichUploader_MetadataReaderService()) && false ?: '_'};
$f = ${($_ = isset($this->services['vich_uploader.upload_handler']) ? $this->services['vich_uploader.upload_handler'] : $this->load('getVichUploader_UploadHandlerService.php')) && false ?: '_'};

$c->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('product_image', $d, $e, $f));
$c->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->load('getFosUser_Util_PasswordUpdaterService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
$c->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('product_image', $d, $e, $f));
$c->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('product_image', $d, $e, $f));
$c->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener()) && false ?: '_'});

return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array())) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'dbname' => 'chandru', 'user' => 'root', 'password' => NULL, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $a, $c, array());
