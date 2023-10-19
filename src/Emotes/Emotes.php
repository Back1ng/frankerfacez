<?php declare(strict_types=1);

namespace Back1ng\FrankerFacez\Emotes;

use Back1ng\FrankerFacez\SendableGet;

final class Emotes implements SendableGet
{
    private string $route = '/v1/emotes';

    private EmotesParams $params;

    public function __construct()
    {
        $this->params = new EmotesParams();
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getParams(): string
    {
        $params = '?';

        foreach ($this->params->toArray() as $key => $param) {
            $params .= $key . '=' . $param . '&';
        }

        return $params;
    }

    public function setParams(EmotesParams $params): self
    {
        $this->params = $params;

        return $this;
    }
}