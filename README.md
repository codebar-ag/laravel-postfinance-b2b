## Usage
Invoice download web services provided by PostFinance

## 🚧 Testing

Copy your own phpunit.xml-file.

```bash
cp phpunit.xml.dist phpunit.xml
```

Modify environment variables in the phpunit.xml-file:

```xml
    <env name="POSTFINANCE_B2B_WSDL" value="wds"/>
    <env name="POSTFINANCE_B2B_CACHE_WSDL" value="wsdl"/>
    <env name="POSTFINANCE_B2B_USERNAME" value="username"/>
    <env name="POSTFINANCE_B2B_PASSWORD" value="password"/>
    <env name="POSTFINANCE_B2B_DEBUG" value="debug"/>

    <env name="POSTFINANCE_B2B_TESTS_PAYER_ID" value=""/>
    <env name="POSTFINANCE_B2B_TESTS_BILLER_ID" value=""/>
    <env name="POSTFINANCE_B2B_TESTS_TRANSACTION_ID" value=""/>
    <env name="POSTFINANCE_B2B_TESTS_FILE_TYPE" value="RGXMLSIG"/>
```

Run the tests:

```bash
./vendor/bin/pest
```

## 📝 Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## ✏️ Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

```bash
POSTFINANCE_B2B_USERNAME=xxxxx POSTFINANCE_B2B_PASSWORD='XXXXX' POSTFINANCE_B2B_DEBUG=true composer test
```

### Code Style

```bash
./vendor/bin/pint
```

## 🧑‍💻 Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## 🙏 Credits

- [Sebastian Fix](https://github.com/StanBarrows)
- [All Contributors](../../contributors)
- [Skeleton Repository from Spatie](https://github.com/spatie/package-skeleton-laravel)
- [Laravel Package Training from Spatie](https://spatie.be/videos/laravel-package-training)

## 🎭 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
