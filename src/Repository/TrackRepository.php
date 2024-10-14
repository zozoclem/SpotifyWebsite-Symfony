<?php
// src/Repository/TrackRepository.php
namespace App\Repository;

use App\Entity\Track;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Track>
 *
 * @method Track|null find($id, $lockMode = null, $lockVersion = null)
 * @method Track|null findOneBy(array $criteria, array $orderBy = null)
 * @method Track[]    findAll()
 * @method Track[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
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

    // Ajoutez vos autres méthodes personnalisées ici
}