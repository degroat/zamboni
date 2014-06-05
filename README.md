zamboni
=======

Simple PHP utility for scraping a table from HTML

```php
require "zamboni.php";
$zamboni = new zamboni();
$zamboni->load_from_url('http://www.w3schools.com/browsers/browsers_stats.asp');
$data = $zamboni->extract('TABLE.reference');
print_r($data);
```

The Zamboni extract method is powered by Ganon.  You can learn more about what selectors are supported on that website:

https://code.google.com/p/ganon/
