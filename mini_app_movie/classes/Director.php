<?php

class Director
{
    public function __construct(
        private int $id,
        private string $firstName,
        private string $lastName,
    ) {}

    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public static function findOneById(int $id): self|bool
    {
        $pdo = Database::getInstance()->getPDO();
        $query = $pdo->prepare("SELECT * FROM director WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();

        $director = $query->fetch(PDO::FETCH_ASSOC);
        if ($director) {
            $directorObject = new Director($director["id"], $director["first_name"], $director["last_name"]);
            return $directorObject;
        }
        return false;
    }
}
