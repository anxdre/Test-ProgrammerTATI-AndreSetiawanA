<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Test-ProgrammerTATI-Andre_Setiawan_A.

## About This Project

In the selection of internship session at PT.TATI, I got a task to work on and submit by Friday, February 16, 2024. By
3:00 PM WIB.

- UI Template [HTML](.matoxihtml-10/main-files/matoxi).
- UI Template [Documentation](.matoxihtml-10/main-files/documentation).

## Specification

This project includes several test from PT.TATI in one place with monolithic architecture (Laravel).

- Project Sheet [Requirement](https://drive.google.com/file/d/1LDZTDSeu6ez7ceLusQsnVbDcL5IZsxAU/view?usp=sharing)

**Task 1 (Daily Log & Confirmation Feature)**

- Daily Log
    - Namespace: `log/`
    - Controller Placement: `app/Http/Controllers/DailyLogController.php`
    - View Placement: `resources/views/dailylog`
    - URL Path: `example.com/log/daily/{path}` (route: web)
    - UI Stacks:
        - [Boostrap v5.1.3](https://getbootstrap.com/),
        - [jQuery v3.6.0](https://jquery.com/)
        - [JQuery Datatable](https://datatables.net)
        - ...

- Verification
    - Namespace: `verification/`
    - Controller Placement: `app/Http/Controllers/ LogVerificationController.php`
    - View Placement: `resources/views/dailylog`
    - URL Path: `example.com/verification/{path}` (route: web)
    - UI Stacks:
        - [Boostrap v5.1.3](https://getbootstrap.com/),
        - [jQuery v3.6.0](https://jquery.com/)
        - [JQuery Datatable](https://datatables.net)
        - ...

**Task 2 (Wilayah Api Service)**

- Api Service
    - DatabaseSql : [Wilayah.sql](wilayah.sql)
    - Namespace: `api/provinsi`
    - Controller Placement: `app/Http/Controllers/Api/WilayahController.php`
    - View Placement: `-`
    - Base Response Placement : `app/Http/Resources/BaseResponseResource.php`
    - URL Path: `example.com/api/proovinsi/{path}` (route: api)
    - How to use :
        - `GET /api/provinsi` for showing all province.
        - `GET /api/provinsi/{id}` for showing detail by id province.
        - `POST /api/provinsi` for adding new province.
        - `PUT /api/provinsi/{id}` for updating province by id.
        - `DELETE /api/provinsi/{id}` for deleting province by id.

**Task 3 (Worker Performance Matrix)**

- Controller Placement: `app/Http/Controllers/KinerjaController.php`
- PhpUnit Test Placement: `tests/Http/Controllers/KinerjaControllerTest.php`
- Test Result : `Passed ✅`

**Task 4 (Looping Number Sequence)**

- Controller Placement: `app/Http/Controllers/DeretController.php`
- PhpUnit Test Placement: `tests/Http/Controllers/DeretControllerTest.php`
- Test Result : `Passed ✅`

## Development : Laravel

To start development.

1. Install dependencies with `composer install`.
2. Duplicate & Rename `.env.example` to `.env`.
3. Setup database conf in `.env`.
4. Generate key with `php artisan key:generate`
5. Run `php artisan migrate:fresh` to populate the database.
6. Run `php artisan db:seed` to fill dummy data into database.
7. Run `php artisan serve` to run at local server.

*note : for wilayah API service you need to **execute sql** file at [here](wilayah.sql) into your database
