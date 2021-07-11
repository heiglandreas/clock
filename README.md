# Clock

A minimal Sample-Implementation for PSR-20.

This tiny package allows you to inject a clock into your code that will either give you
the current date and time (useful for production code) or a predefined one (useful for testing).

## Usage

```php
use Org_Heigl\Clock\FrozenClock;use Org_Heigl\Clock\SystemClock;use Psr\CLock\ClockInterface;

class App 
{
	public function main(ClockInterface $clock): string
	{
	    return sprintf('The current date and time is %s', $clock->now()->format('Y-m-d H:i:s.u'));
	}
}

$app = new App();
$clock = new SystemClock();

var_Dump($app->main($clock) === $app->main($clock));
// This will most certainly be "false"

$clock = new FrozenClock(new DateTimeImmutable());
var_dump($app->main($clock) === $app->main($clock));
// This will always be true
```

## Installation

Install the package via composer like this:

```bash
composer require org_heigl/clock
```
