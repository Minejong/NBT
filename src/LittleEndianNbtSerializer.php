<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\nbt;

use function array_values;
use function count;
use function pack;
use function unpack;

class LittleEndianNbtSerializer extends BaseNbtSerializer{

	public function readShort() : int{
		return $this->buffer->getLShort();
	}

	public function readSignedShort() : int{
		return $this->buffer->getSignedLShort();
	}

	public function writeShort(int $v){
		$this->buffer->putLShort($v);
	}

	public function readInt() : int{
		return $this->buffer->getLInt();
	}

	public function writeInt(int $v){
		$this->buffer->putLInt($v);
	}

	public function readLong() : int{
		return $this->buffer->getLLong();
	}

	public function writeLong(int $v){
		$this->buffer->putLLong($v);
	}

	public function readFloat() : float{
		return $this->buffer->getLFloat();
	}

	public function writeFloat(float $v){
		$this->buffer->putLFloat($v);
	}

	public function readDouble() : float{
		return $this->buffer->getLDouble();
	}

	public function writeDouble(float $v){
		$this->buffer->putLDouble($v);
	}

	public function readIntArray() : array{
		$len = $this->readInt();
		return array_values(unpack("V*", $this->buffer->get($len * 4)));
	}

	public function writeIntArray(array $array){
		$this->writeInt(count($array));
		$this->buffer->put(pack("V*", ...$array));
	}
}
