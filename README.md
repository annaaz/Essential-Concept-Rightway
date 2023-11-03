# **SOFTWARE ENGGINER NOTE**
# Essential Progamming : 
#### **Progamming Paradigma PHP-OOP**

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

This page containt guide or general information based on best practices for code in PHP for developer , this note dedicated for other developer so able to learn PHP with right way. in this section is shared about fundamental progamming with php . 

This page was guided by these :
- https://www.php-fig.org/
- https://phptherightway.com/

#### **Basic OOP Principles**  
#### 1.Class, Object, Method, Attirbutes . 
Here the simplest explanation about these concept  : 
![Alt text](https://www.devopsschool.com/blog/wp-content/uploads/2021/05/Complete-Tutorials-of-PHP-OOP-ClassesObjects-with-Example-code.png "a title")

> Code Example : 

    <?php  
    class Product {  
    public $judul = "judul",  
                $penulis = "penulis",  
                $harga = 0;  
  
	    public function __construct($judul,$penulis,$harga){  
	        $this->judul = $judul;  
	        $this->penulis = $penulis;  
	        $this->harga = $harga;  
	    }  
  
	    public function getLabel(){  
	        return "$this->judul, $this->penulis";  
	    }  
    }  
    class PrintInfoProduct {  
	    public function doPrint( Product $product ){  
	        $string = "Nama komik , Nama , Harga";  
	        return $string;  
	    }  
	}  
	$product1 = new Product('Naruto','Masusi Natsumoto',80000);  
	$infoProduct = new PrintInfoProduct();  
	echo $infoProduct->doPrint($product1);
	
	
	
> Note: `public function doPrint( Product $product )` is class object type , its possible to set parameter as object . read more about it will lead in dependency injection, polymofsm.


#### 2. Construct Function 
This function will automatically called when first create or inisiate a class. you can set this by adding __ (2 underscores) : 
```
<?php

class Product {
    public $judul = "judul",
                $penulis = "penulis",
                $harga = 0;

    public function __construct($judul,$penulis,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

$product1 = new Product('Naruto','Masusi Natsumoto',80000);

echo $product1->getLabel();
```

#### 3. Visibility
![Alt text](https://media.licdn.com/dms/image/D4D12AQF0DrUcY3aiwA/article-inline_image-shrink_1500_2232/0/1688981015762?e=1704326400&v=beta&t=LF038Uq2klQfGoggy37yLH6YoIVOssvfiJW2MrZt5_w "a title")

#### 4. Inheritance 
Inheritance is relational between two or more classes where derived class inherits of properties of pre existing (base) classes

Base Classes : it is a class who inherited by another class , also called parent class or super class 

Derived Class : it is class who inherit properties by parent (base) class ,  also called child class.

#### 4. Overriding
```sh
class Animal {
  public function makeSound() {
    echo "The animal makes a sound.";
  }
}

class Dog extends Animal {
  public function makeSound() {
    echo "The dog barks.";
  }
}

// Create an object of the Dog class
$dog = new Dog();

// Call the makeSound() method on the Dog object
$dog->makeSound(); // Output: The dog barks.
```

There also more principlies in to discover more , well available on full source code above
