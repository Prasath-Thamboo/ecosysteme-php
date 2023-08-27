<?php
namespace App\Tests\Entity;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    public function testEntity()
    {
        $user = new User();        
        $user->setFirstName("John");
        $user->setLastName("Doe");
        $user->setEmail("j.doe@mail.com");
        $user->setPassword("1234");
        $user->setRoles(["ROLE_ADMIN"]);

        $this->assertEquals("John",  $user->getFirstName());
        $this->assertEquals("Doe",  $user->getLastName());
        $this->assertEquals("j.doe@mail.com",  $user->getEmail());
        $this->assertEquals("j.doe@mail.com",  $user->getUserIdentifier());
        $this->assertContains("ROLE_ADMIN",  $user->getRoles());

        $this->assertEquals("1234",  $user->getPassword());
    }
}