<?php

namespace App\Repository;

use App\Entity\Artist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

class ArtistRepository extends ServiceEntityRepository
{
    private EntityManagerInterface $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Artist::class);
        $this->entityManager = $entityManager;
    }

    public function addArtist(Artist $artist): void
    {
        if ($artist) {
            $this->entityManager->persist($artist);
            $this->entityManager->flush();
        }
    }

    public function findOneByArtistID(string $id): ?Artist
    {
        return $this->find($id);
    }
}