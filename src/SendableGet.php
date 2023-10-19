<?php declare(strict_types=1);

namespace Back1ng\FrankerFacez;

interface SendableGet
{
    /**
     * Example: /v1/emotes
     * @return string
     */
    public function getRoute(): string;

    /**
     * @return string
     */
    public function getParams(): string;
}