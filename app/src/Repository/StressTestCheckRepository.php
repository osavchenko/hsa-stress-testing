<?php

namespace App\Repository;

use App\Entity\StressTestCheck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StressTestCheck>
 *
 * @method StressTestCheck|null find($id, $lockMode = null, $lockVersion = null)
 * @method StressTestCheck|null findOneBy(array $criteria, array $orderBy = null)
 * @method StressTestCheck[]    findAll()
 * @method StressTestCheck[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
final class StressTestCheckRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StressTestCheck::class);
    }

    public function save(StressTestCheck $entity): void
    {
        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
    }
}
