<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Host;
use App\Entity\Customer;

#[ORM\Entity]
#[ORM\Table(name: 'project')]
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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastpass_folder = null;
    
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link_mock_ups = null;

    #[ORM\Column(type: Types::SMALLINT)]    
    private ?int $managed_server = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\OneToOne(targetEntity: Host::class)]
    private ?Host $host;

    #[ORM\OneToOne(targetEntity: Customer::class)]
    private ?Customer $customer;

    public function getId(): ?int
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

    //host
    public function getHost(): Host 
    {
        return $this->host;
    }

    public function setHost(Host $host_id): void
    {
        $this->host = $host_id;
    }

    //customer
    public function getCustomer(): Customer 
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer_id): void
    {
        $this->customer = $customer_id;
    }
}