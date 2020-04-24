Running Tests

./vendor/bin/phpunit tests.

Runs all tests in the tests folder

./vendor/bin/phpunit tests/EmailTest.php

Run a single test.

./vendor/bin/phpunit --testdox tests

Shows all the test details.

For the looks you should create a phpunit.xml to change the propeties of the tests

\<phpunit\
    bootstrap="vendor/autoload.php"
    colors="true"
>
\</phpunit>

For colors and setting the autoload.

To create logs for each test add the following tag

\<logging>\
    \<log type="testdox-html" target="tests/log/testdox.html"/>\
  \<log type="testdox-text" target="tests/log/testdox.txt"/>\
\</logging>

For the CodeDungeon Printer to work you need to run the test without the testdox flag

./vendor/bin/phpunit tests
