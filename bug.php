```php
$data = file_get_contents('large_file.txt');
// ... process $data ...
```
This code might lead to memory exhaustion if 'large_file.txt' is very large.  PHP loads the entire file into memory at once.