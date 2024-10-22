<?php

namespace App\Repository;

use App\Entity\Track;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

class TrackRepository extends ServiceEntityRepository
{
    private EntityManagerInterface $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Track::class);
        $this->entityManager = $entityManager;
    }

    public function addTrack(Track $track): void
    {
        if($track){ 
            $this->entityManager->persist($track);
            $this->entityManager->flush();
        } 
    }

    public function findOneByTrackID(string $id): ?Track
    {
        return $this->find($id);
    }

}