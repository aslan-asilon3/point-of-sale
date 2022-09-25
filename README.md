

## About App

This POS(Point Of Sale) App for processing transaction in shop from cashier. this app using Laravel 8.* and minimal PHP V7.4 and if bugs or error when processing this app it's because your PHP version under v7

### Features:
- Product Category Management
- Product Management
  - Multiple Delete
  - Barcode Print
-  Member Management
  - Member Card Print
- Supplier Management
- Budget Expense
- Budget Purchase
- Budget Sales
- Income Statement Report 
  - Month
  - Day
  - Date Custom
- Custom Nota Type
  - Big Nota
  - Small Nota / Thermal Nota
- User and Profile Management
- Shop Settings
  - Identity
  - Upload Card Member Design
  - Setting Member Discount
- User (Administrator, Cashier)
- Grafik ChartJS In Dashboard

## Instalasi
#### Via Git
```bash
git clone 
```

### Download ZIP

### Setup Aplikasi
For The first , running this in your terminal/command line 
```bash
composer update
```
or:
```bash
composer install
```
Copy file .env from .env.example
```bash
cp .env.example .env
```
Cofiguration file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```
Optional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:QGRW4K7UVzS2M5HE2ZCLlUuiCtOIzRSfb38iWApkphE=
APP_DEBUG=true
APP_URL=http://example-app.test
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Pengaturan
```bash
php artisan db:seed
```
Running app
```bash
php artisan serve
```

## Link Tutorial


## License

[MIT license](https://opensource.org/licenses/MIT)
