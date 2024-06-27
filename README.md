<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Installation Guide

### Local Development Setup

Follow these steps to set up and run the project locally:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/SCUMBAG0LEE/ChurchConnect.git
    cd your-repository
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    ```

3. **Set up environment variables:**
    - Copy the `.env.example` file to `.env`:
      ```bash
      copy .env.example .env
      ```
    - Update the `.env` file with your database configuration and other necessary settings:
      ```dotenv
      DB_CONNECTION=mysql
      DB_HOST=your-database-host
      DB_PORT=3306
      DB_DATABASE=your-database-name
      DB_USERNAME=your-database-username
      DB_PASSWORD=your-database-password
      ```

4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**
    ```bash
    php artisan migrate
    ```

6. **Run the application:**
    ```bash
    php artisan serve
    ```
    - Your application will be accessible at `http://127.0.0.1:8000`.

### Production Setup with Apache on Windows

Follow these steps to set up and deploy the project on an Apache server:

1. **Clone the repository to your server:**
    ```bash
    git clone https://github.com/SCUMBAG0LEE/ChurchConnect.git
    cd your-repository
    ```

2. **Install dependencies:**
    ```bash
    composer install --optimize-autoloader --no-dev
    npm install --production
    ```

3. **Set up environment variables:**
    - Copy the `.env.example` file to `.env`:
      ```bash
      copy .env.example .env
      ```
    - Update the `.env` file with your database configuration and other necessary settings:
      ```dotenv
      DB_CONNECTION=mysql
      DB_HOST=your-database-host
      DB_PORT=3306
      DB_DATABASE=your-database-name
      DB_USERNAME=your-database-username
      DB_PASSWORD=your-database-password
      ```

4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**
    ```bash
    php artisan migrate --force
    ```

6. **Set permissions:**
    ```bash
    icacls "C:\path-to-your-project\storage" /grant IIS_IUSRS:F /T
    icacls "C:\path-to-your-project\bootstrap\cache" /grant IIS_IUSRS:F /T
    ```

7. **Configure Apache:**
    - Open the Apache configuration file (`httpd.conf`) and add the following virtual host configuration:
      ```apache
      <VirtualHost *:80>
          ServerName your-domain.com
          DocumentRoot "C:/path-to-your-project/public"

          <Directory "C:/path-to-your-project/public">
              AllowOverride All
              Require all granted
          </Directory>

          ErrorLog "logs/your-project-error.log"
          CustomLog "logs/your-project-access.log" common
      </VirtualHost>
      ```
    - Restart Apache to apply the changes:
      ```bash
      httpd -k restart
      ```

8. **Run the application:**
    - Your application should now be accessible at `http://your-domain.com`.

## Contact Feature

To set up the contact feature, add the following route in your `web.php` file:

```php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

Route::post('send-mail', function (Request $request) {
    $details = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'message' => $request->input('message'),
    ];

    try {
        Mail::to('user@example.com')->send(new SendMail($details));
        return redirect()->back()->with('status', 'success')->with('message', 'Email sent successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('status', 'error')->with('message', 'Failed to send email. Please try again later.');
    }
});

Replace 'user@example.com' with your actual email address.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
