<?php
namespace App\Tests\Entity;

use App\Entity\Order;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderTest extends KernelTestCase
{
    public function testCreateOrder()
    {
        $user = new User();        
        $user->setEmail("prasath1@hotrmail.fr");
        $order = new Order();
        $order->setNumber('0990');
        $order->setTotalPrice (10.00);
        $user->setPassword("1234");
        $order->setUserId($user);

        $this->assertEquals('0990', $order->getNumber());
        $this->assertEquals(10.00, $order->getTotalPrice());
        $this->assertEquals("prasath1@hotmail.fr", $order->getUserId()->getEmail());

       
    }
}