<?php
namespace Onphpoint\WebtCoreDoctrineDbal;

class Project_Twig_Extension extends \Twig\Extension\AbstractExtension
{
	public function getFilters(): array {
		return [
			new \Twig\TwigFilter('rpsEmoji', [$this, 'getRPSSymbol']),
		];
	}

	public function getRPSSymbol($symbol): string {
		return match ($symbol) {
			'R' => '🪨',
			'P' => '📃',
			'S' => '✂️',
			default => 'Unknown',
		};
	}
}
