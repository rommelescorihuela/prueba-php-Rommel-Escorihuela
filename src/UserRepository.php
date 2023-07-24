<?php

class UserRepository
{
    private $users = [];

    public function save(User $user)
    {
        $this->users[] = $user;
    }

    public function update(User $user)
    {
        foreach ($this->users as &$existingUser) {
            if ($existingUser->getEmail() === $user->getEmail()) {
                $existingUser = $user;
                break;
            }
        }
    }

    public function delete(User $user)
    {
        foreach ($this->users as $key => $existingUser) {
            if ($existingUser->getEmail() === $user->getEmail()) {
                unset($this->users[$key]);
                break;
            }
        }
    }

    public function getAll()
    {
        return $this->users;
    }

    public function getByEmail($email)
    {
        foreach ($this->users as $existingUser) {
            if ($existingUser->getEmail() === $email) {
                return $existingUser;
            }
        }

        return null;
    }
}
