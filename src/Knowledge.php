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
        private array $ranges,
    ) {}

    public function getName(): string
    {
        return $this->name;
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
}
