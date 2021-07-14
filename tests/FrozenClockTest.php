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
use PHPUnit\Framework\TestCase;

class FrozenClockTest extends TestCase
{
	/**
	 * @covers \Org_Heigl\Clock\FrozenClock::__construct
	 * @covers \Org_Heigl\Clock\FrozenClock::now
	 */
	public function testFrozenClockReturnsTheSameResult(): void
	{
		$clock = new FrozenClock(new DateTimeImmutable());

		self::assertTrue($clock->now() === $clock->now());
	}
}
