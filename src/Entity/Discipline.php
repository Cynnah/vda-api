<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DisciplineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Table("discipline")
 * @ORM\Entity(repositoryClass=DisciplineRepository::class)
 */
class Discipline
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="discipline_step_max", type="integer")
     */
    private $disciplineStepMax;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @ORM\OneToMany(targetEntity=DisciplineSteps::class, mappedBy="discipline")
     */
    private $disciplineStep;

    public function __construct()
    {
        $this->disciplineStep = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDisciplineStepMax(): ?int
    {
        return $this->disciplineStepMax;
    }

    public function setDisciplineStepMax(int $disciplineStepMax): self
    {
        $this->disciplineStepMax = $disciplineStepMax;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * @return Collection|DisciplineSteps[]
     */
    public function getDisciplineStep(): Collection
    {
        return $this->disciplineStep;
    }

    public function addDisciplineStep(DisciplineSteps $disciplineStep): self
    {
        if (!$this->disciplineStep->contains($disciplineStep)) {
            $this->disciplineStep[] = $disciplineStep;
            $disciplineStep->setDiscipline($this);
        }

        return $this;
    }

    public function removeDisciplineStep(DisciplineSteps $disciplineStep): self
    {
        if ($this->disciplineStep->contains($disciplineStep)) {
            $this->disciplineStep->removeElement($disciplineStep);
            // set the owning side to null (unless already changed)
            if ($disciplineStep->getDiscipline() === $this) {
                $disciplineStep->setDiscipline(null);
            }
        }

        return $this;
    }
}
