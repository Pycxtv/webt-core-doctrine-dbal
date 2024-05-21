<?php

namespace Onphpoint\WebtCoreDoctrineDbal\Models;

use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'gameround')]
class Gameround
{

    #[ORM\Column(type: 'string', length: 255)]
	private string $player1_name;

    #[ORM\Column(type: 'string', length: 255)]
	private string $player2_name;

    #[ORM\Column(type: 'string', length: 1)]
	private string $player1_symbol;

    #[ORM\Column(type: 'string', length: 1)]
	private string $player2_symbol;


    #[ORM\Column(type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    private int|null $gameround_id = null;

    #[ORM\Column(type: 'integer')]
	private int $rounddate;

    /**
     * @param string $player1_name
     * @param string $player2_name
     * @param string $player1_symbol
     * @param string $player2_symbol
     * @param int $rounddate
     */
    public function __construct(string $player1_name, string $player2_name, string $player1_symbol, string $player2_symbol, int $rounddate)
    {
        $this->player1_name = $player1_name;
        $this->player2_name = $player2_name;
        $this->player1_symbol = $player1_symbol;
        $this->player2_symbol = $player2_symbol;
        $this->rounddate = $rounddate;
    }


    public function getPlayer1Name(): string
    {
        return $this->player1_name;
    }

    public function getPlayer2Name(): string
    {
        return $this->player2_name;
    }

    public function getPlayer1Symbol(): string
    {
        return $this->player1_symbol;
    }

    public function getPlayer2Symbol(): string
    {
        return $this->player2_symbol;
    }

    public function getGameroundId(): int
    {
        return $this->gameround_id;
    }

    public function getRounddate(): int
    {
        return $this->rounddate;
    }


    public function getWinner(): int|null
    {
        // calculate winner
        if ($this->getPlayer1Symbol() === $this->getPlayer2Symbol()) {
            return null;
        } elseif ($this->getPlayer1Symbol() === 'R' && $this->getPlayer2Symbol() === 'S') {
            return 1;
        } elseif ($this->getPlayer1Symbol() === 'S' && $this->getPlayer2Symbol() === 'P') {
            return 1;
        } elseif ($this->getPlayer1Symbol() === 'P' && $this->getPlayer2Symbol() === 'R') {
            return 1;
        } else {
            return 2;
        }
    }

    public function getDate(): \DateTime
    {
        $date = new \DateTime();
        $date->setTimestamp($this->getRounddate());
        return $date;
    }
}
