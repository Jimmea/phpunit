# Test features
- Email validate format: valid and invalid

# Install
- Clone project
- Run ```composer install ```
- Check version phpunit: ``` ./vendor/bin/phpunit --version```

# Test
###1. Test Execution
```
➜ ./vendor/bin/phpunit tests
PHPUnit 8.0.0 by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: 70 ms, Memory: 10.00MB

OK (3 tests, 3 assertions)
```

- The above assumes that vendor/autoload.php, the autoloader script managed by Composer, exists and is able to load the code for the Email class. Depending on how you set up autoloading, you may need to run composer dump-autoload now.
- *tests* instructs the PHPUnit command-line test runner to execute all tests found declared in **Test.php* sourcecode files in the *tests* directory.

 
###2. TestDox
- Below you see an alternative output which is based on the idea that the name of a test can be used to document the behavior that is verified by the test:

```
➜ ./vendor/bin/phpunit --testdox tests
PHPUnit 8.0.0 by Sebastian Bergmann and contributors.

Email
 ✔ Can be created from valid email address
 ✔ Cannot be created from invalid email address
 ✔ Can be used as string
```

## 3. Organizing Tests
```
project
├── composer.json
├── composer.lock
├── phpunit.xml.dist
├── src
│   └── Calculator.php
│   └── RemoteConnect
|   └── Email
├── tests
│   ├── DataTest.php
│   ├── EmailTest.php
│   ├── OutputTest.php
│   ├── RemoteConnectTest.php
│   └── CalculatorTest.php
└── vendor
```