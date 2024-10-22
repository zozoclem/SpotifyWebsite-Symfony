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

    // Ajoute un Artist à la base de données
    public function addArtist(Artist $artist): void
    {
        if ($artist) {
            $this->entityManager->persist($artist);
            $this->entityManager->flush();
        }
    }

    // Trouve un Artist par son ID
    public function findOneByArtistID(string $id): ?Artist
    {
        return $this->find($id);
    }
}