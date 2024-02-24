<?php

namespace App\Dto\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateManagerDto
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct(
        private string $name,
        private string $email,
        private string $password
    ) {
    }

    public static function fromRequest(Request $request): static
    {
        return new static(
            name: $request->name,
            email: $request->email,
            password: Hash::make($request->password),
        );
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
