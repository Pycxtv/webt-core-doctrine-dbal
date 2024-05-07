<?php
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: 'gameround')]
class Gameround {
	#[ORM\Column(type: 'string')]
    private string $player1_name;
	#[ORM\Column(type: 'string')]
    private string $player2_name;
	#[ORM\Column(type: 'string')]
    private string $player1_symbol;
	#[ORM\Column(type: 'string')]
    private string $player2_symbol;

    #[ORM\Id]
	#[ORM\Column(type: 'integer')]
	#[ORM\GeneratedValue]
    private int $gameround_id;

    #[ORM\Column(type: 'integer')]
    private int $rounddate;
}