<?php

namespace App\Entity;

class Artist
{
    private string $externalUrls;
    private string $followers;
    private array $genres;
    private string $href;
    private string $id;
    private string $images;
    private string $name;
    private int $popularity;
    private string $type;
    private string $uri;

    // Constructor
    public function __construct(
        string $externalUrls,
        string $followers,
        array $genres,
        string $href,
        string $id,
        string $images,
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

    public function getExternalUrls(): string
    {
        return $this->externalUrls;
    }

    public function getFollowers(): string
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

    public function getImages(): string
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