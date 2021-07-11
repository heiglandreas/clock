<?php

declare(strict_types=1);

/*
 * Copyright (c) Andreas Heigl<andreas@heigl.org
 * 
 * Licensed under the MIT License. See LICENSE.md file in the project root
 * for full license information.
 */

namespace Org_Heigl\Clock;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

class FrozenClock implements ClockInterface
{
	public function __construct(private DateTimeImmutable $dateTime)
	{
		//
	}

	public function now(): DateTimeImmutable
	{
		return $this->dateTime;
	}


}
