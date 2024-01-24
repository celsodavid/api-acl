<?php

namespace App\DTO\Users;

class EditUserDTO
{
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly ?string $password = null,
    ) {
        //
    }
}
