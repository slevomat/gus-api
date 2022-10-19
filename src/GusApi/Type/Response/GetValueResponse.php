<?php

declare(strict_types=1);

namespace GusApi\Type\Response;

class GetValueResponse
{
    public string $GetValueResult;

    public function __construct(string $GetValueResult)
    {
        $this->GetValueResult = $GetValueResult;
    }

    public function getGetValueResult(): string
    {
        return $this->GetValueResult;
    }
}
