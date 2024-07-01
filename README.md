# PHP Basic Skeleton

This is a skeleton project to work on coding katas using PHP and PHPUnit. Follow the instructions below to set up the project and run the tests.

## Requirements

- PHP 7.4 or higher
- Composer
- VSCode (optional, for debugging with Xdebug)

## Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/zendyani/php-basic-skeleton.git
   cd php-basic-skeleton
   ```

2. **Install dependencies**

   Make sure you have [Composer](https://getcomposer.org/) installed, then run:

   ```bash
   composer install
   ```

## Project Structure

- `src/`: This directory contains the source code of your project.
- `tests/`: This directory contains the test cases for your project.

## Running Tests

To run the tests, use the following command:

```bash
composer test
```

You can also generate a code coverage report by running:

```bash
vendor/bin/phpunit --coverage-html coverage
```

The coverage report will be generated in the `coverage/` directory.

## Linting

To check and fix coding standards, use the following command:

```bash
composer lint
```

## Static Analysis

To perform static analysis on the code, use the following command:

```bash
composer analyse
```

## Xdebug Configuration

To enable Xdebug for debugging, ensure that your `php.ini` has the correct configuration. Here is an example configuration for Xdebug 3.x:

```ini
[xdebug]
zend_extension=xdebug
xdebug.mode=debug
xdebug.start_with_request=yes
xdebug.client_host=localhost
xdebug.client_port=9003
```

### Configuring Debugging Client

Make sure your debugging client (IDE) is set up to listen on the same port (9003). Below is an example configuration for VSCode:

**VSCode `launch.json` example:**

1. **Open your VSCode workspace** and create or open a `.vscode` directory.
2. **Create a `launch.json` file** in the `.vscode` directory with the following content:
    ```json
    {
        // Use IntelliSense to learn about possible attributes.
        // Hover to view descriptions of existing attributes.
        // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
        "version": "0.2.0",
        "configurations": [
            {
                "name": "Listen for Xdebug",
                "type": "php",
                "request": "launch",
                "port": [
                    9003
                ]
            }
        ]
    }
    ```
### Running Xdebug in VSCode

1. **Open the Run and Debug panel** by clicking the play icon in the sidebar or pressing `Ctrl+Shift+D`.
2. **Select "Listen for XDebug"** from the configuration dropdown at the top.
3. **Click the green play button** or press `F5` to start listening for Xdebug connections.

### Running PHPUnit with Xdebug

After starting the Xdebug listener in VSCode, you can run your tests with Xdebug enabled:

```bash
composer test
```

If you don't need Xdebug for running your PHPUnit tests, you can disable it during test execution:

```bash
XDEBUG_MODE=off ./vendor/bin/phpunit
```

Alternatively, you can modify the `phpunit.xml` configuration to not set the `XDEBUG_MODE` environment variable.

## Writing Tests

To create a new test case:

1. Create a new file in the `tests/` directory with the name of the class you want to test, followed by `Test.php`. For example, if you are testing a class named `Calculator`, create a file named `CalculatorTest.php`.
2. Inside the test file, create a class that extends `PHPUnit\Framework\TestCase`.
3. Write test methods inside the test class. Each test method should be prefixed with the word `test`.

Example test file:

```php
<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }
}
```

## Contributing

Feel free to fork this repository and create pull requests. If you find any issues, please open an issue on GitHub.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
