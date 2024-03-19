<?php

namespace App\Entity;

use App\Repository\StressTestCheckRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StressTestCheckRepository::class)]
final class StressTestCheck
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "datetime_immutable")]
    private DateTimeImmutable $createdAt;

    public function __construct(
        #[ORM\Column(length: 255)]
        private string $firstStringProperty,
        #[ORM\Column(length: 255)]
        private string $secondStringProperty,
        #[ORM\Column()]
        private string $intProperty,
        #[ORM\Column()]
        private float $floatProperty,
    )
    {
        $this->createdAt = new DateTimeImmutable();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstStringProperty(): ?string
    {
        return $this->firstStringProperty;
    }

    public function setFirstStringProperty(string $firstStringProperty): static
    {
        $this->firstStringProperty = $firstStringProperty;

        return $this;
    }

    public function getSecondStringProperty(): string
    {
        return $this->secondStringProperty;
    }

    public function setSecondStringProperty(string $secondStringProperty): void
    {
        $this->secondStringProperty = $secondStringProperty;
    }

    public function getIntProperty(): ?string
    {
        return $this->intProperty;
    }

    public function setIntProperty(string $intProperty): static
    {
        $this->intProperty = $intProperty;

        return $this;
    }

    public function getFloatProperty(): float
    {
        return $this->floatProperty;
    }

    public function setFloatProperty(float $floatProperty): void
    {
        $this->floatProperty = $floatProperty;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
}
