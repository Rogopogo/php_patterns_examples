<?php

final class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->checkEmailValid($email);
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function equals(Email $other): bool
    {
        return $this->getEmail() === $other->getEmail();
    }

    private function checkEmailValid(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('E-mail введен некорректно');
        }
    }
}
