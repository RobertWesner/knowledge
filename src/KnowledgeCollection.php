<?php

final class KnowledgeCollection
{
    /**
     * @var Knowledge[]
     */
    private array $collection = [];

    public function __construct(
        private readonly string $key,
        private readonly string $name,
    ) {}

    public function push(string $name, string $level, array $ranges, string $cssClass = ''): self
    {
        $this->collection[] = new Knowledge($name, $level, $ranges, $cssClass);

        return $this;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Knowledge[]
     */
    public function getAll(): array
    {
        return $this->collection;
    }
}
