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

/**
 * @internal
 */
interface NbtStreamWriter{

	public function writeByte(int $v);

	public function writeShort(int $v);

	public function writeInt(int $v);

	public function writeLong(int $v);

	public function writeFloat(float $v);

	public function writeDouble(float $v);

	public function writeByteArray(string $v);

	/**
	 * @param string $v
	 *
	 * @throws \InvalidArgumentException if the string is too long
	 */
	public function writeString(string $v);

	/**
	 * @param int[] $array
	 */
	public function writeIntArray(array $array);
}
