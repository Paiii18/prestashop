<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getConnection', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getMetadataFactory', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getExpressionBuilder', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'beginTransaction', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getCache', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getCache();
    }

    public function transactional($func)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'transactional', array('func' => $func), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'wrapInTransaction', array('func' => $func), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'commit', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->commit();
    }

    public function rollback()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'rollback', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getClassMetadata', array('className' => $className), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'createQuery', array('dql' => $dql), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'createNamedQuery', array('name' => $name), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'createQueryBuilder', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'flush', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'clear', array('entityName' => $entityName), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->clear($entityName);
    }

    public function close()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'close', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->close();
    }

    public function persist($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'persist', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'remove', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'refresh', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'detach', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'merge', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getRepository', array('entityName' => $entityName), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'contains', array('entity' => $entity), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getEventManager', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getConfiguration', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'isOpen', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getUnitOfWork', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getProxyFactory', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'initializeObject', array('obj' => $obj), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'getFilters', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'isFiltersStateClean', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, 'hasFilters', array(), $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        return $this->valueHolder7d680->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerafe0e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7d680) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7d680 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7d680->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerafe0e && ($this->initializerafe0e->__invoke($valueHolder7d680, $this, '__get', ['name' => $name], $this->initializerafe0e) || 1) && $this->valueHolder7d680 = $valueHolder7d680;

        if (isset(self::$publicProperties676b9[$name])) {
            return $this->valueHolder7d680->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
