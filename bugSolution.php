```php
$handle = fopen('large_file.txt', 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // Process each line individually
        // ... process $line ...
    }
    fclose($handle);
}
```
This revised code reads and processes the file line by line, avoiding loading the entire file into memory at once.  This significantly reduces memory consumption and prevents potential memory exhaustion errors.