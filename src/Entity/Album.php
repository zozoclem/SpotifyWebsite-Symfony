<?php

namespace App\Entity;
class Album
{
    private string $albumType;
    private int $totalTracks;
    private array $availableMarkets;
    private array $externalUrls;
    private string $href;
    private string $id;
    private array $images;
    private string $name;
    private string $releaseDate;
    private string $releaseDatePrecision;
    private string $type;
    private string $uri;
    private array $artists;
    private string $albumGroup;

    // Constructor
    public function __construct(
        string $albumType,
        int $totalTracks,
        array $availableMarkets,
        array $externalUrls,
        string $href,
        string $id,
        array $images,
        string $name,
        string $releaseDate,
        string $releaseDatePrecision,
        string $type,
        string $uri,
        array $artists,
        string $albumGroup
    ) {
        $this->albumType = $albumType;
        $this->totalTracks = $totalTracks;
        $this->availableMarkets = $availableMarkets;
        $this->externalUrls = $externalUrls;
        $this->href = $href;
        $this->id = $id;
        $this->images = $images;
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->releaseDatePrecision = $releaseDatePrecision;
        $this->type = $type;
        $this->uri = $uri;
        $this->artists = $artists;
        $this->albumGroup = $albumGroup;
    }

    // Getters and setters
    public function getAlbumType(): string
    {
        return $this->albumType;
    }

    public function setAlbumType(string $albumType): void
    {
        $this->albumType = $albumType;
    }

    public function getTotalTracks(): int
    {
        return $this->totalTracks;
    }

    public function setTotalTracks(int $totalTracks): void
    {
        $this->totalTracks = $totalTracks;
    }

    public function getAvailableMarkets(): array
    {
        return $this->availableMarkets;
    }

    public function setAvailableMarkets(array $availableMarkets): void
    {
        $this->availableMarkets = $availableMarkets;
    }

    public function getExternalUrls(): array
    {
        return $this->externalUrls;
    }

    public function setExternalUrls(array $externalUrls): void
    {
        $this->externalUrls = $externalUrls;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(string $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getReleaseDatePrecision(): string
    {
        return $this->releaseDatePrecision;
    }

    public function setReleaseDatePrecision(string $releaseDatePrecision): void
    {
        $this->releaseDatePrecision = $releaseDatePrecision;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getArtists(): array
    {
        return $this->artists;
    }

    public function setArtists(array $artists): void
    {
        $this->artists = $artists;
    }

    public function getAlbumGroup(): string
    {
        return $this->albumGroup;
    }

    public function setAlbumGroup(string $albumGroup): void
    {
        $this->albumGroup = $albumGroup;
    }
}