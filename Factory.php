<?php

interface Product
{
    public function getName(): string;
}

class Phone implements Product
{
    public function getName(): string
    {
        return 'Телефон';
    }
}

class Laptop implements Product
{
    public function getName(): string
    {
        return 'Ноутбук';
    }
}

class ProductFactory
{
    public function createProduct(string $type): Product
    {
        switch ($type) {
            case 'phone':
                return new Phone();
            case 'laptop':
                return new Laptop();
            default:
                throw new InvalidArgumentException('Не верно передан класс продукта');
        }
    }
}

$factory = new ProductFactory();

$phone = $factory->createProduct('phone');
$laptop = $factory->createProduct('laptop');
