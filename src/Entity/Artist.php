<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 255)]
    private $id;

    #[ORM\Column(type: "string", length: 255)]
    private $externalUrls;

    #[ORM\Column(type: "integer")]
    private $followers;

    #[ORM\Column(type: "json")]
    private $genres = [];

    #[ORM\Column(type: "string", length: 255)]
    private $href;

    #[ORM\Column(type: "string", length: 255)]
    private $images;

    #[ORM\Column(type: "string", length: 255)]
    private $name;

    #[ORM\Column(type: "integer")]
    private $popularity;

    #[ORM\Column(type: "string", length: 255)]
    private $type;

    #[ORM\Column(type: "string", length: 255)]
    private $uri;

    public function __construct(
        string $id,
        string $externalUrls,
        int $followers,
        array $genres,
        string $href,
        string $images,
        string $name,
        int $popularity,
        string $type,
        string $uri
    ) {
        $this->id = $id;
        $this->externalUrls = $externalUrls;
        $this->followers = $followers;
        $this->genres = $genres;
        $this->href = $href;
        $this->images = $images;
        $this->name = $name;
        $this->popularity = $popularity;
        $this->type = $type;
        $this->uri = $uri;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getExternalUrls(): string
    {
        return $this->externalUrls;
    }

    public function getFollowers(): int
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

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setExternalUrls(string $externalUrls): self
    {
        $this->externalUrls = $externalUrls;
        return $this;
    }

    public function setFollowers(int $followers): self
    {
        $this->followers = $followers;
        return $this;
    }

    public function setGenres(array $genres): self
    {
        $this->genres = $genres;
        return $this;
    }

    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setPopularity(int $popularity): self
    {
        $this->popularity = $popularity;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }
}