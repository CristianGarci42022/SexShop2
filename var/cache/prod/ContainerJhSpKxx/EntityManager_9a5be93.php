<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere62f0 = null;
    private $initializerb87d5 = null;
    private static $publicPropertiesf7187 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getConnection', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getMetadataFactory', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getExpressionBuilder', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'beginTransaction', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getCache', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'transactional', array('func' => $func), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'commit', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->commit();
    }
    public function rollback()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'rollback', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getClassMetadata', array('className' => $className), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'createQuery', array('dql' => $dql), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'createNamedQuery', array('name' => $name), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'createQueryBuilder', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'flush', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'clear', array('entityName' => $entityName), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->clear($entityName);
    }
    public function close()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'close', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->close();
    }
    public function persist($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'persist', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'remove', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'refresh', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'detach', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'merge', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'contains', array('entity' => $entity), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getEventManager', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getConfiguration', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'isOpen', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getUnitOfWork', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getProxyFactory', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'initializeObject', array('obj' => $obj), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'getFilters', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'isFiltersStateClean', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'hasFilters', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return $this->valueHoldere62f0->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb87d5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldere62f0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere62f0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldere62f0->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__get', ['name' => $name], $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        if (isset(self::$publicPropertiesf7187[$name])) {
            return $this->valueHoldere62f0->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere62f0;
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
        $targetObject = $this->valueHoldere62f0;
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
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere62f0;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere62f0;
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
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__isset', array('name' => $name), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere62f0;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere62f0;
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
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__unset', array('name' => $name), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere62f0;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere62f0;
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
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__clone', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        $this->valueHoldere62f0 = clone $this->valueHoldere62f0;
    }
    public function __sleep()
    {
        $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, '__sleep', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
        return array('valueHoldere62f0');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb87d5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb87d5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb87d5 && ($this->initializerb87d5->__invoke($valueHoldere62f0, $this, 'initializeProxy', array(), $this->initializerb87d5) || 1) && $this->valueHoldere62f0 = $valueHoldere62f0;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere62f0;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere62f0;
    }
}
