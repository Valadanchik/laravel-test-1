<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## TEST TASK

## Description
A simple Laravel APP for storing submissions data using API

## VERSIONS
###### Laravel 11
###### PHP 8.2

## Tools

- [Laravel](https://laravel.com/)


## Installation

1. Clone the repository
2. Create a `.env` file from the `.env.example` file
3. Install the dependencies
```bash
composer install
```
4. Update the `.env` file with your database credentials
5. Generate the application key
```bash
php artisan key:generate
```
6. Run the migrations
```bash
php artisan migrate
```
7. Run the seeder
```bash
php artisan db:seed
```


## Usage

1. Start the development server
```bash
php artisan serve
```
2. Use Postman or any other API testing tool to test the API endpoints

## API Endpoints

**POST** /api/submissions
- Create a new submission
- Request body:
```json
{
    "name": "John Doe",
    "email": "test@example.com",
    "message": "Hello World"
}
```

3. We are using queue for data processing
```bash
php artisan queue:work
```

4. For checking events, check the `storage/logs/laravel.log` file
5. For checking the database, check the `submissions` table
6. For checking the queue, check the `jobs` table
7. For checking the failed jobs, check the `failed_jobs` table




