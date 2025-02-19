<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'distributionapiclient.distribution_api' shared service.

$a = new \PrestaShop\CircuitBreaker\FactorySettings(2, 3, 86400);

$b = \GuzzleHttp\HandlerStack::create();
$b->push(new \PrestaShop\Module\DistributionApiClient\Middleware\Cache(\Doctrine\Common\Cache\Psr6\DoctrineProvider::wrap(new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 86400, (\dirname(__DIR__, 4).'/var/cache/dev'.\DIRECTORY_SEPARATOR.'/distribution-api')))));

$a->setStorage(($this->services['prestashop.core.circuit_breaker.storage'] ?? $this->load('getPrestashop_Core_CircuitBreaker_StorageService.php')));
$a->setClientOptions(['handler' => $b]);

return $this->services['distributionapiclient.distribution_api'] = new \PrestaShop\Module\DistributionApiClient\DistributionApi((new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory())->create($a), ($this->services['PrestaShop\\PrestaShop\\Core\\Module\\SourceHandler\\SourceHandlerFactory'] ?? $this->load('getSourceHandlerFactoryService.php')), ($this->services['prestashop.adapter.data_provider.module'] ?? $this->getPrestashop_Adapter_DataProvider_ModuleService()), new \PrestaShop\Module\DistributionApiClient\ShopDataProvider(), ($this->services['prestashop.core.foundation.version'] ?? $this->load('getPrestashop_Core_Foundation_VersionService.php'))->getSemVersion(), (\dirname(__DIR__, 4).'/var/cache/dev'.\DIRECTORY_SEPARATOR.'/downloads'));
