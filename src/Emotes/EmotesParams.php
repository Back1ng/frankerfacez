<?php declare(strict_types=1);

namespace Back1ng\FrankerFacez\Emotes;

final class EmotesParams
{
    private string $query = '';

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'q' => $this->query,
            'sensitive' => 'true',
            'animated' => 'true',
            'sort' => 'count-desc',
        ];
    }
}