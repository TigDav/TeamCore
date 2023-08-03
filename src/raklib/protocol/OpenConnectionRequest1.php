<?php

/*
 * RakLib network library
 *
 *
 * This project is not affiliated with Jenkins Software LLC nor RakNet.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 */

namespace raklib\protocol;

#include <rules/RakLibPacket.h>


use raklib\RakLib;

class OpenConnectionRequest1 extends OfflineMessage{
	public static $ID = MessageIdentifiers::ID_OPEN_CONNECTION_REQUEST_1;

	public $protocol = RakLib::PROTOCOL;
	public $mtuSize;

	protected function encodePayload(){
		$this->writeMagic();
		$this->putByte($this->protocol);
		$this->buffer = str_pad($this->buffer, "\x00", $this->mtuSize);
	}

	protected function decodePayload(){
		$this->readMagic();
		$this->protocol = $this->getByte();
		$this->mtuSize = strlen($this->buffer);
	}
}