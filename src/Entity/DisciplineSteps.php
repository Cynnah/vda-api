<?php

namespace App\Entity;

use App\Repository\DisciplineStepsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("discipline_step")
 * @ORM\Entity(repositoryClass=DisciplineStepsRepository::class)
 */
class DisciplineSteps
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Discipline::class, inversedBy="disciplineStep")
     * @ORM\JoinColumn(name="discipline_id", nullable=false)
     */
    private $discipline;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="system_in_game", type="text")
     */
    private $systemInGame;

    /**
     * @ORM\Column(name="is_ritual", type="boolean", nullable=true)
     */
    private $isRitual;

    /**
     * @ORM\Column(name="conditions", type="text", nullable=true)
     */
    private $conditions;

    /**
     * @ORM\Column(name="rank", type="integer")
     */
    private $rank;

    /**
     * @ORM\Column(name="is_last_step", type="boolean")
     */
    private $isLastStep;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscipline(): ?Discipline
    {
        return $this->discipline;
    }

    public function setDiscipline(?Discipline $discipline): self
    {
        $this->discipline = $discipline;

        return $this;
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSystemInGame(): ?string
    {
        return $this->systemInGame;
    }

    public function setSystemInGame(string $systemInGame): self
    {
        $this->systemInGame = $systemInGame;

        return $this;
    }

    public function getIsRitual(): ?bool
    {
        return $this->isRitual;
    }

    public function setIsRitual(?bool $isRitual): self
    {
        $this->isRitual = $isRitual;

        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getIsLastStep(): ?bool
    {
        return $this->isLastStep;
    }

    public function setIsLastStep(bool $isLastStep): self
    {
        $this->isLastStep = $isLastStep;

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
}
