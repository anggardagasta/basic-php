<?php
require_once('Cart.php');

/**
* to test same character
*/
function case1() {
	echo "=== Case 1 ===\n";
	$cart = new Cart();
	$cart->addProduct("Baju Merah Mantap", 1);
	$cart->addProduct("Baju Merah Mantap", 1);
	$cart->addProduct("Bukuku", 3);
	$cart->removeProduct("Bukuku");
	$cart->addProduct("Singlet Hijau", 1);
	$cart->removeProduct("ProdukBohongan");
	$cart->showCart();
}

/**
* to test for lower or upper case
*/
function case2() {
	echo "\n=== Case 2 ===\n";
	$cart = new Cart();
	$cart->addProduct("Baju Merah Mantap", 1);
	$cart->addProduct("baju merah Mantap", 1);
	$cart->addProduct("Bukuku", 3);
	$cart->removeProduct("Bukuku");
	$cart->addProduct("Singlet Hijau", 1);
	$cart->removeProduct("ProdukBohongan");
	$cart->showCart();
}

/**
* to test if only quantity with type int will be processed
*/
function case3() {
	echo "\n=== Case 3 ===\n";
	$cart = new Cart();
	$cart->addProduct("Baju Merah Mantap", 1);
	$cart->addProduct("baju merah Mantap", "one");
	$cart->addProduct("Bukuku", 3);
	$cart->removeProduct("Bukuku");
	$cart->addProduct("Singlet Hijau", 1);
	$cart->removeProduct("ProdukBohongan");
	$cart->showCart();
}

/**
* to test if only product code with type string will be processed
*/
function case4() {
	echo "\n=== Case 4 ===\n";
	$cart = new Cart();
	$cart->addProduct(222, 1);
	$cart->addProduct("baju merah Mantap", 1);
	$cart->addProduct("Bukuku", 3);
	$cart->removeProduct("Bukuku");
	$cart->addProduct("Singlet Hijau", 1);
	$cart->removeProduct("ProdukBohongan");
	$cart->showCart();
}

/**
* to test if all products are removed
*/
function case5() {
	echo "\n=== Case 5 ===\n";
	$cart = new Cart();
	$cart->addProduct("baju merah Mantap", 1);
	$cart->removeProduct("baju merah mantap");
	$cart->showCart();
}

# use this to execute
for ($i = 1; $i <=5; $i++) {
	$method = "case{$i}";
	call_user_func($method);

}
# or use this to execute
// case1();
// case2();
// case3();
// case4();
// case5();