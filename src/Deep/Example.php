<?php

declare(strict_types=1);

namespace Bug\Deep;

use Bug\Deep\Enum\Ns\FooEnum;

class Example
{
    private readonly array $values;

    public function __construct()
    {
        $this->values = [
            'fqn' => self::class,
            'vals' => [
                'enumVal' => FooEnum::Bar,
            ],
        ];
    }
}
