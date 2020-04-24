Running Tests

./vendor/bin/phpunit tests.

Runs all tests in the tests folder

./vendor/bin/phpunit tests/EmailTest.php

Run a single test.

./vendor/bin/phpunit --testdox tests

Shows all the test details.

For the looks you should create a phpunit.xml to change the propeties of the tests

<phpunit
    bootstrap="vendor/autoload.php"
    colors="true"
>
</phpunit>

For colors and setting the autoload.
