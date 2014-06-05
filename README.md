zamboni
=======

Simple PHP utility for scraping a table from HTML

```php
require "zamboni.php";
$zamboni = new zamboni();
$zamboni->load_from_url('http://www.imdb.com/chart/top');
$data = $zamboni->extract('TABLE.chart');
```
