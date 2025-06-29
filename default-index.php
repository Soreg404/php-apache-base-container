Hello from default-index.php!<br>
Server is up!<br>

<pre>
PHP version: <?= PHP_VERSION . PHP_EOL ?>
Apache version: <?php
if (function_exists('apache_get_version')) {
    echo apache_get_version();
} else {
    echo "apache_get_version function doesn't exist";
}
echo PHP_EOL;
?>

# Server info
  address: <?= $_SERVER['SERVER_ADDR'] . PHP_EOL ?>
  name: <?= $_SERVER['SERVER_NAME'] . PHP_EOL ?>
  Software: <?= $_SERVER['SERVER_SOFTWARE'] . PHP_EOL ?>
  Document Root: <?= $_SERVER['DOCUMENT_ROOT'] . PHP_EOL ?>
  Current Script: <?= $_SERVER['SCRIPT_FILENAME'] . PHP_EOL ?>

# Client info:
  address: <?= $_SERVER['REMOTE_ADDR'] . PHP_EOL ?>

# Request info:
  host: <?= $_SERVER['HTTP_HOST'] . PHP_EOL ?>
</pre>
