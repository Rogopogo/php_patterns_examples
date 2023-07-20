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

abstract class ProductFactory
{
    abstract public function createProduct(): Product;
}

class PhoneFactory extends ProductFactory
{
    public function createProduct(): Product
    {
        return new Phone();
    }
}

class LaptopFactory extends ProductFactory
{
    public function createProduct(): Product
    {
        return new Laptop();
    }
}

$phoneFactory = new PhoneFactory();
$phone = $phoneFactory->createProduct();
$phone->getName();

$laptopFactory = new LaptopFactory();
$laptop = $laptopFactory->createProduct();
$laptop->getName();
