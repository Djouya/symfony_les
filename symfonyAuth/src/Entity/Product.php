<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $code;

    #[ORM\Column(type: 'text', nullable: true)]
    private $omschrijving;

    #[ORM\Column(type: 'float')]
    private $prijs;

    #[ORM\Column(type: 'datetimetz')]
    private $creatietijd;

    #[ORM\Column(type: 'datetimetz', nullable: true)]
    private $changetijd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(?string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getPrijs(): ?float
    {
        return $this->prijs;
    }

    public function setPrijs(float $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }

    public function getCreatietijd(): ?\DateTimeInterface
    {
        return $this->creatietijd;
    }

    public function setCreatietijd(\DateTimeInterface $creatietijd): self
    {
        $this->creatietijd = $creatietijd;

        return $this;
    }

    public function getChangetijd(): ?\DateTimeInterface
    {
        return $this->changetijd;
    }

    public function setChangetijd(?\DateTimeInterface $changetijd): self
    {
        $this->changetijd = $changetijd;

        return $this;
    }
}
