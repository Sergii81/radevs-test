<?php

namespace App\Dto\User;

use App\Actions\Users\GetManagerAction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdateManagerDto
{
    public function __construct(
        private string $name,
        private string $email,
        private ?string $password
    ) {
    }

    public static function fromRequest(Request $request): static
    {
        /** @var GetManagerAction $action */
        $action = app()->make(GetManagerAction::class);

        /** @var User $manager */
        $manager = $action->execute($request->id);

        return new static(
            name: $request->name ?: $manager->name,
            email: $request->email ?: $manager->email,
            password: $request->password ? Hash::make($request->password) : $manager->password,
        );
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
