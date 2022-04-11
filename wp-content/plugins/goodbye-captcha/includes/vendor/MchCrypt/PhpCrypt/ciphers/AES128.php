<?php
/*
 * Author: Ryan Gilfether
 * URL: http://www.gilfether.com/phpCrypt
 * Date: April 3, 2013
 * Copyright (C) 2013 Ryan Gilfether
 *
 * This file is part of phpCrypt
 *
 * phpCrypt is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see <http://www.gnu.org/licenses/>.
 */


require_once(dirname(__FILE__)."/../phpCrypt.php");
require_once(dirname(__FILE__)."/Rijndael128.php");


/**
 * Implement Advanced Encryption Standard (AES)
 * Since AES-128 is the same as Rijndael-128, this
 * class extends Cipher_Rijndael_128, and all the work
 * is done there.
 *
 * @author Ryan Gilfether
 * @link http://www.gilfether.com/phpcrypt
 * @copyright 2013 Ryan Gilfether
 */
class PhpCrypt_Cipher_AES_128 extends PhpCrypt_Cipher_Rijndael_128
{
	/** @type integer BYTES_BLOCK The size of the block, in bytes */
	const BYTES_BLOCK = 16; //128 bits;

	/** @type integer BYTES_KEY The size of the key, in bytes */
	const BYTES_KEY = 16; // 128 bits;

	/**
	 * Constructor, Sets the key used for encryption.
	 *
	 * @param string $key string containing the user supplied encryption key
	 * @return void
	 */
	public function __construct($key)
	{
		// Setup AES by calling the second constructor in Rijndael_128
		// The block size is set here too, since all AES implementations use 128 bit blocks
		parent::__construct1(PhpCrypt::CIPHER_AES_128, $key, self::BYTES_KEY);
	}


	/**
	 * Destructor
	 *
	 * @return void
	 */
	public function __destruct()
	{
		parent::__destruct();
	}
}
?>