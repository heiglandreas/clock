<?php

/*
 * Copyright (c) Andreas Heigl<andreas@heigl.org
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\ClockTest;

use DateTimeImmutable;
use Org_Heigl\Clock\FrozenClock;
use Org_Heigl\Clock\SystemClock;
use PHPUnit\Framework\TestCase;

class SystemClockTest extends TestCase
{
	public function testSystemClockReturnsAlwaysDifferentResult(): void
	{
		$clock = new SystemClock();

		self::assertFalse($clock->now() === $clock->now());
	}
}
