<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Customer;
use App\Entity\Host;

class Project 
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    private ?string $lastpass_folder = null;
    
    #[ORM\Column(length: 255)]
    private ?string $link_mock_ups = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $managed_server = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $notes = null;

    public function __toString()
    {
        return $this->id;
    }

    //code
    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    //name
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    //lastpass_folder
    public function getLastpast_folder(): ?string
    {
        return $this->lastpass_folder;
    }

    public function setLastpast_folder(string $lastpass_folder): void
    {
        $this->lastpass_folder = $lastpass_folder;
    }

    //link_mock_ups
    public function getLink_mock_ups(): ?string
    {
        return $this->link_mock_ups;
    }

    public function setLink_mock_ups(string $link_mock_ups): void
    {
        $this->link_mock_ups = $link_mock_ups;
    }

    //managed_server
    public function getManaged_server(): int
    {
        return $this->managed_server;
    }

    public function setManaged_server(int $managed_server): void
    {
        $this->managed_server = $managed_server;
    }

    //notes
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    #[ORM\ManyToOne(targetEntity: Host::class, inversedBy: 'projects')]
    private $host;

    public function getHost(): ?Host
    {
        return $this->host;
    }

    public function setHost(?Host $host): self
    {
        $this->host = $host;

        return $this;
    }

    #[ORM\ManyToOne(targetEntity: Customer::class, inversedBy: 'projects')]
    private $customer;

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}