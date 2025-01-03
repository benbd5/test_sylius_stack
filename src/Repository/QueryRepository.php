<?php

namespace App\Repository;

use App\Entity\Query;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\ResourceRepositoryTrait;
use Sylius\Resource\Doctrine\Persistence\RepositoryInterface;
/**
 * @extends ServiceEntityRepository<Query>
 *
 * * @method Query|null find($id, $lockMode = null, $lockVersion = null)
 * * @method Query|null findOneBy(array $criteria, array $orderBy = null)
 * * @method Query[]    findAll()
 * * @method Query[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QueryRepository extends ServiceEntityRepository implements RepositoryInterface
{
    use ResourceRepositoryTrait;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Query::class);
    }
}
