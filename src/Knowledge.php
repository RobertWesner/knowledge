<?php

final class Knowledge
{
    public const string LEVEL_BASIC = 'basic';
    public const string LEVEL_BEGINNER = 'beginner';
    public const string LEVEL_PROFICIENT = 'proficient';
    public const string LEVEL_EXPERT = 'expert';

    public function __construct(
        private readonly string $name,
        private readonly string $level,
        private readonly array  $ranges,
        private readonly string $cssClass,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getSanitizedName(): string
    {
        return strtolower(preg_replace('/\W/', '', str_replace(['#', '+'], ['sharp', 'plus'], $this->getName())));
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @return array<array{int, ?int}>
     */
    public function getRanges(): array
    {
        return $this->ranges;
    }

    public function getYears(): float
    {
        return round(
            array_sum(
                array_map(
                    fn (array $range): float => ($range[1] ?? dateToYearFloat('now')) - $range[0],
                    $this->getRanges(),
                ),
            ),
            1,
        );
    }

    public function getCssClass(): string
    {
        return $this->cssClass;
    }
}
