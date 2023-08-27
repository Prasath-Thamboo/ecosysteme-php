<?php
namespace App\Tests\Entity;
use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductTest extends KernelTestCase
{
    public function testCreateProduct()
    {
        $product = new Product();
        $product->setName('Jeu'); 
        $product->setPrice(10);

        $this->assertEquals('Jeu', $product->getName());
        $this->assertEquals(10, $product->getPrice());

    }
}