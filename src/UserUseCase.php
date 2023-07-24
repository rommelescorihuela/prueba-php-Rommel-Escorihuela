<?php

class UserUseCase
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function saveUser($name, $email, $password)
    {
        $existingUser = $this->userRepository->getByEmail($email);
        if ($existingUser !== null) {
            throw new Exception("El correo electrónico ya está registrado.");
        }

        $user = new User($name, $email, $password);

        $this->userRepository->save($user);

        return $user;
    }
}
