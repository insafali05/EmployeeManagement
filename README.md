# Employee Management System (Laravel & MySQL)

## Task Overview

This project is a simple Employee Management System built using Laravel and MySQL as per the given task requirements.

### Task Details:

1. **Database Schema**

    - Employee Table
    - Employee Detail Table
    - Employee Salary Table

2. **Functionalities Implemented**
    - Employee registration form to add employees.
    - Salary form to enter and save salaries for multiple employees.
    - Display employees in a list.
    - Employee detail page with salary information.
    - Laravel validation for form inputs.
    - Artisan command to increment employee salary by 10%.

### Technologies Used

-   Laravel (PHP Framework)
-   MySQL (Database)
-   Blade Templating Engine
-   Bootstrap (for styling)

## Installation Guide

### Step 1: Clone the Repository

```bash
git clone https://github.com/insafali05/EmployeeManagement.git
cd your-repo
```

### Step 2: Install Dependencies

```bash
composer install
npm install
```

### Step 3: Set Up the Environment

Copy the `.env.example` file and rename it to `.env`. Then, update database configurations:

```bash
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 4: Run Migrations & Seed Data

```bash
php artisan migrate --seed
```

### Step 5: Start the Laravel Development Server

```bash
php artisan serve
```

### Step 6: Running the Salary Increment Command

```bash
php artisan salary:increment
```

## Features

-   Secure Employee Management System
-   Dynamic salary entry for multiple employees
-   Data validation with Laravel
-   Artisan command for salary increment

## Screenshots

## Author

[Your Name](https://github.com/your-username)

## License

This project is licensed under the MIT License.
