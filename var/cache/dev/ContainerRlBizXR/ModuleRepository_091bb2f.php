<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7d680 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerafe0e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties676b9 = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getList', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getInstalledModules', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getMustBeConfiguredModules', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getUpgradableModules', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'setActionUrls', array('collection' => $collection), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->clearCache($moduleName, $allShops);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerafe0e = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder7d680) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder7d680 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder7d680->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__get', ['name' => $name], $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        if (isset(self::$publicProperties676b9[$name])) {
            return $this->valueHolder7d680->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d680;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d680;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d680;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7d680;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__isset', array('name' => $name), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d680;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7d680;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__unset', array('name' => $name), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7d680;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7d680;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__clone', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        $this->valueHolder7d680 = clone $this->valueHolder7d680;
    }

    public function __sleep()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__sleep', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return array('valueHolder7d680');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerafe0e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerafe0e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'initializeProxy', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7d680;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7d680;
    }
}
