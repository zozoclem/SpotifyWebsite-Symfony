<?php

namespace App\Entity;

class Artist
{
    private array $externalUrls;
    private array $followers;
    private array $genres;
    private string $href;
    private string $id;
    private array $images;
    private string $name;
    private int $popularity;
    private string $type;
    private string $uri;

    // Constructor
    public function __construct(
        array $externalUrls,
        array $followers,
        array $genres,
        string $href,
        string $id,
        array $images,
        string $name,
        int $popularity,
        string $type,
        string $uri
    ) {
        $this->externalUrls = $externalUrls;
        $this->followers = $followers;
        $this->genres = $genres;
        $this->href = $href;
        $this->id = $id;
        $this->images = $images;
        $this->name = $name;
        $this->popularity = $popularity;
        $this->type = $type;
        $this->uri = $uri;
    }

    // Getters

    public function getExternalUrls(): array
    {
        return $this->externalUrls;
    }

    public function getFollowers(): array
    {
        return $this->followers;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPopularity(): int
    {
        return $this->popularity;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}