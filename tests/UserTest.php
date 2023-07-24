<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $this->assertEquals("John Doe", $user->getName());
    }

    public function testGetEmail()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $this->assertEquals("john@example.com", $user->getEmail());
    }

    public function testGetPassword()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $this->assertEquals("password123", $user->getPassword());
    }

    public function testSetName()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $user->setName("Jane Doe");
        $this->assertEquals("Jane Doe", $user->getName());
    }

    public function testSetEmail()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $user->setEmail("jane@example.com");
        $this->assertEquals("jane@example.com", $user->getEmail());
    }

    public function testSetPassword()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $user->setPassword("newpassword456");
        $this->assertEquals("newpassword456", $user->getPassword());
    }
}

class UserRepositoryTest extends TestCase
{
    public function testSaveAndGetAll()
    {
        $user1 = new User("John Doe", "john@example.com", "password123");
        $user2 = new User("Jane Doe", "jane@example.com", "password456");

        $userRepository = new UserRepository();
        $userRepository->save($user1);
        $userRepository->save($user2);

        $allUsers = $userRepository->getAll();
        $this->assertCount(2, $allUsers);
        $this->assertSame($user1, $allUsers[0]);
        $this->assertSame($user2, $allUsers[1]);
    }

    public function testUpdate()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $userRepository = new UserRepository();
        $userRepository->save($user);

        $updatedUser = new User("Jane Doe", "jane@example.com", "newpassword456");
        $userRepository->update($updatedUser);

        $foundUser = $userRepository->getByEmail("jane@example.com");
        $this->assertSame($updatedUser, $foundUser);
    }

    public function testDelete()
    {
        $user = new User("John Doe", "john@example.com", "password123");
        $userRepository = new UserRepository();
        $userRepository->save($user);

        $userRepository->delete($user);
        $this->assertEmpty($userRepository->getAll());
    }

    public function testGetByEmail()
    {
        $user1 = new User("John Doe", "john@example.com", "password123");
        $user2 = new User("Jane Doe", "jane@example.com", "password456");

        $userRepository = new UserRepository();
        $userRepository->save($user1);
        $userRepository->save($user2);

        $foundUser = $userRepository->getByEmail("jane@example.com");
        $this->assertSame($user2, $foundUser);
    }
}
