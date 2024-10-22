<?php

namespace App\Entity;

use App\Repository\TrackRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrackRepository::class)]
#[ORM\Table(name: 'tracks')]
class Track
{
    #[ORM\Column(type: 'integer')]
    private int $discNumber;

    #[ORM\Column(type: 'integer')]
    private int $durationMs;

    #[ORM\Column(type: 'boolean')]
    private bool $explicit;

    #[ORM\Column(type: 'string', length: 255)]
    private string $isrc;

    #[ORM\Column(type: 'string', length: 255)]
    private string $spotifyUrl;

    #[ORM\Column(type: 'string', length: 255)]
    private string $href;

    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 255)]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private string $id;

    #[ORM\Column(type: 'boolean')]
    private bool $isLocal;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'integer')]
    private int $popularity;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $previewUrl;

    #[ORM\Column(type: 'integer')]
    private int $trackNumber;

    #[ORM\Column(type: 'string', length: 50)]
    private string $type;

    #[ORM\Column(type: 'string', length: 255)]
    private string $uri;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $pictureLink;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $albumId;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $albumName;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $albumType;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $artists;

    public function __construct(
        int $discNumber,
        int $durationMs,
        bool $explicit,
        string $isrc,
        string $spotifyUrl,
        string $href,
        string $id,
        bool $isLocal,
        string $name,
        int $popularity,
        ?string $previewUrl,
        int $trackNumber,
        string $type,
        string $uri,
        ?string $pictureLink,
        ?string $albumId,
        ?string $albumName,
        ?string $albumType,
        ?array $artists
    ) {
        $this->discNumber = $discNumber;
        $this->durationMs = $durationMs;
        $this->explicit = $explicit;
        $this->isrc = $isrc;
        $this->spotifyUrl = $spotifyUrl;
        $this->href = $href;
        $this->id = $id;
        $this->isLocal = $isLocal;
        $this->name = $name;
        $this->popularity = $popularity;
        $this->previewUrl = $previewUrl;
        $this->trackNumber = $trackNumber;
        $this->type = $type;
        $this->uri = $uri;
        $this->pictureLink = $pictureLink;
        $this->albumId = $albumId;
        $this->albumName = $albumName;
        $this->albumType = $albumType;
        $this->artists = $artists;
    }

    public function getDiscNumber(): int
    {
        return $this->discNumber;
    }

    public function getDurationMs(): int
    {
        return $this->durationMs;
    }

    public function isExplicit(): bool
    {
        return $this->explicit;
    }

    public function getIsrc(): string
    {
        return $this->isrc;
    }

    public function getSpotifyUrl(): string
    {
        return $this->spotifyUrl;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function isLocal(): bool
    {
        return $this->isLocal;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPopularity(): int
    {
        return $this->popularity;
    }

    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    public function getTrackNumber(): int
    {
        return $this->trackNumber;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getPictureLink(): ?string
    {
        return $this->pictureLink;
    }

    public function getAlbumId(): ?string
    {
        return $this->albumId;
    }

    public function getAlbumName(): ?string
    {
        return $this->albumName;
    }

    public function getAlbumType(): ?string
    {
        return $this->albumType;
    }

    public function getArtists(): ?array
    {
        return $this->artists;
    }
}