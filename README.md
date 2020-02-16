# JSON to MySql

A simple JSON file importer for MySQL.

## Installation

Step 1: Download the zip bundle and unzip it to your web directory.

Step 2: Go to the project directory and run

```bash
composer install
```

Step 3: Create a database and import the SQL file (`data/db-tables.php`).

Step 4: Open `includes/Database.php` file and insert your database name, host, username, and password.

```php
    private static $dbName = 'json-to-mysql';
    private static $dbUser = 'root';
    private static $dbPassword = '';
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update the tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
