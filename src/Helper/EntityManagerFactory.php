<?php

namespace Itallo\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws ORMException
     */

    public function getEntityManager () : EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration
        ([$rootDir . '/src'],
            true
        );
        $connection = [
            'driver' => 'pdo_pgsql',
            'user' => 'postgres',
            'password' => 'ks2101AB@',
            'host' => 'localhost',
            'port' => 5432,
            'dbname' => 'postgres'
        ];

        return EntityManager::create($connection, $config);
    }
}