<?php

class Cart
{
	private $products = [];

	/**
	* @param string $productCode
	* @param int $quantity
	*/
	public function addProduct($productCode, $quantity)
	{
		if (is_numeric($quantity) && is_string($productCode)) {
			if (isset($this->products[strtolower($productCode)])) {
				$this->products[strtolower($productCode)] += $quantity;
			} else {
				$this->products[strtolower($productCode)] = $quantity;
			}
		}
	}

	public function removeProduct($productCode)
	{
		if (isset($this->products[strtolower($productCode)])) {
			unset($this->products[strtolower($productCode)]);
		}
	}

	public function showCart()
	{
		if (!empty($this->products)) {
			foreach ($this->products as $detail => $total) {
				echo "{$detail} ({$total})";
				echo "\n";
			}
		} else {
			echo "Empty Cart\n";
		}
	}
}