<?php
class Player
{
    private static ?Player $instance = null;

    private function __construct(
        protected string $name,
        protected int $score,
        protected float $health,
    )
    {
    }

    public static function getInstance(
        string $name = "Default",
        int $score = 0,
        float $health = 100
        ):Player
    {
        // We are creating a new Player only if we don't have one
        if (self::$instance === null) {
            self::$instance = new Player($name, $score, $health);
        }
        return self::$instance;
    }

    public function decreaseHealth($damage):void
    {
        $this->health -= $damage;
    }


        /**
         * Get the value of name
         */
        public function getName(): string
        {
                return $this->name;
        }

        /**
         * Set the value of name
         */
        public function setName(string $name): self
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of score
         */
        public function getScore(): int
        {
                return $this->score;
        }

        /**
         * Set the value of score
         */
        public function setScore(int $score): self
        {
                $this->score = $score;

                return $this;
        }

        /**
         * Get the value of health
         */
        public function getHealth(): float
        {
                return $this->health;
        }

        /**
         * Set the value of health
         */
        public function setHealth(float $health): self
        {
                $this->health = $health;

                return $this;
        }
}