<?php

/*
 * PointS, the massive point plugin with many features for PocketMine-MP
 * Copyright (C) 2013-2017  onebone <jyc00410@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace onebone\CoinAPI\provider;

use onebone\coinapi\CoinAPI;

interface Provider{
	public function __construct(CoinAPI $plugin);

	public function open();


	public function accountExists($player);

	
	public function createAccount($player, $defaultCoin = 1000);


	public function removeAccount($player);

	
	public function getCoin($player);

	
	public function setCoin($player, $amount);

	
	public function addCoin($player, $amount);

	
	public function reduceCoin($player, $amount);

	
	public function getAll();

	
	public function getName();

	public function save();
	public function close();
}
