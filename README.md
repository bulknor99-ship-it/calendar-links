# Generate add to calendar links for Google, iCal and other calendar systems
Forked from Spatie

Using this package you can generate links to add events to calendar systems. Here's a quick example:

```php
(new Link(
   'Birthday',
   DateTime::createFromFormat('Y-m-d H:i', '2018-02-01 09:00'),
   DateTime::createFromFormat('Y-m-d H:i', '2018-02-01 18:00')
))->google();
```

This will output: `https://calendar.google.com/calendar/render?action=TEMPLATE&text=Birthday&dates=20180201T090000/20180201T180000&sprop=&sprop=name:`

If you follow that link (and are authenticated with Google) you'll see a screen to add the event to your calendar.

The package can also generate ics files that you can open in several email and calendar programs, including Microsoft Outlook, Google Calendar, and Apple Calendar.

## Installation

You can install the package via composer:

```bash
composer require labomatik/calendar-links
```

## Usage

``` php
<?php
use Labomatik\CalendarLinks\Link;

$from = DateTime::createFromFormat('Y-m-d H:i', '2018-02-01 09:00');
$to = DateTime::createFromFormat('Y-m-d H:i', '2018-02-01 18:00');

$link = Link::create('Sebastian\'s birthday', $from, $to)
    ->description('Cookies & cocktails!')
    ->address('rue de fer 125, 5380 Namur')
    ->attendee(['john@doe.com','silver@bullet.com'])
    ->organizer(['name'=>'Christophe', 'email'=>'christophe@labo.com'])
    ->eventUrl('http://my.domain.com/eventID')    
    ->method('REQUEST');

// Generate a link to create an event on Google calendar
echo $link->google();

// Generate a link to create an event on Yahoo calendar
echo $link->yahoo();

// Generate a link to create an event on outlook.com calendar
echo $link->webOutlook();

// Generate a data uri for an ics file (for iCal & Outlook)
echo $link->ics();

// Generate a data uri for an ics file with custom ID
echo $link->ics('custom_id');

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email cris@labomatik.com instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
