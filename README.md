# 🎓 Student & Academy Management System (Laravel 12)

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="320" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/Status-Complete%20%26%20Working-success?style=for-the-badge" alt="Status">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

A production-ready **Student & Academy Management System (ERP)** built with **Laravel 12**, **MySQL**, and the **Skydash Admin Dashboard Template**. It provides full CRUD workflows for managing students, employees, branches, geographic regions (countries, states, cities), and admission enquiries.

---

## ⚡ 1-Minute Automated Setup (Fast Run)

If you already have PHP, Composer, and MySQL (XAMPP) running, run this single line in your terminal inside the project directory:

### For Windows (PowerShell):
```powershell
composer install; if (!(Test-Path .env)) { copy .env.example .env }; php artisan key:generate; php artisan migrate; php artisan serve
```

### For Linux / macOS (Bash):
```bash
composer install && cp -n .env.example .env && php artisan key:generate && php artisan migrate && php artisan serve
```

---

## 📌 Features & Modules Overview

| Module | Features & Capabilities | Route Name |
|---|---|---|
| **Student Management** | Register students with name, email, contact, class, address, Aadhar ID, and status | `student`, `student.create` |
| **Employee Management** | Manage staff with salary, department, auto current joining date, address, phone | `employee`, `employee.create` |
| **Branch Management** | Multi-branch academy support with unique code, contact phone, address, and status | `branch`, `branch.create` |
| **City Management** | Manage cities linked to geographical hierarchy | `city`, `city.create` |
| **State Management** | State directory with validation and unique checks | `state`, `state.create` |
| **Country Management** | Country directory with validation and unique checks | `country`, `country.create` |
| **Enquiry Management** | Public & prospective student lead generation with name, email, and messages | `enquiry`, `enquiry.create` |
| **Admin Dashboard** | Fully responsive layout powered by Skydash Admin Template with dark/light navbar | `dashboard` |

---

## 🤖 Automated Database Features (Built-In)

- **Auto-Timestamps:** `created_at` and `updated_at` automatically record current timestamp (`CURRENT_TIMESTAMP`) without manual input.
- **Auto Current Date:** `joining_date` in employees automatically defaults to today's date if left blank.
- **Auto Primary Keys:** `id` is auto-incrementing; no need to manually specify IDs.
- **Auto Default Status:** `status` defaults to `'1'` (Active) for students and branches.
- **Dynamic Salary Support:** `salary` is stored as `VARCHAR(50)`, supporting numeric amounts (e.g. `50000`) or formatted strings (e.g. `1.5k`, `$2,500/mo`).

---

## 🛠️ Complete Tech Stack

- **Backend:** [Laravel 12.x](https://laravel.com)
- **Language:** PHP 8.2+
- **Database:** MySQL 8.0+ / MariaDB
- **ORM:** Eloquent ORM
- **Frontend Engine:** Laravel Blade Templating
- **UI Framework:** Bootstrap 5.x & Skydash Admin Dashboard
- **Icons:** Feather Icons, Themify Icons, Material Design Icons (MDI)

---

## 🚀 Beginner's Step-by-Step Installation Guide

Follow these exact steps to set up the project on your local machine:

### 1. Prerequisites
- **PHP** >= 8.2 (Check with `php -v`)
- **Composer** (Check with `composer -V`)
- **MySQL / XAMPP** (Start Apache & MySQL in XAMPP Control Panel)
- **Git** (Check with `git --version`)

---

### 2. Clone the Repository
```bash
git clone https://github.com/suhaimali/student-management-system-laravel.git
cd student-management-system-laravel
```

---

### 3. Install Composer Dependencies
```bash
composer install
```

---

### 4. Setup Environment File
Copy `.env.example` to create your local `.env`:
- **Windows (Command Prompt):** `copy .env.example .env`
- **Windows (PowerShell):** `Copy-Item .env.example .env`
- **Linux/Mac:** `cp .env.example .env`

---

### 5. Generate Application Key
```bash
php artisan key:generate
```

---

### 6. Configure Database in `.env`
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Create a new database named **`emr_software`** (utf8mb4_unicode_ci).
3. Verify your `.env` file matches:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=emr_software
DB_USERNAME=root
DB_PASSWORD=
```

---

### 7. Run Database Migrations
This automatically creates all 7 tables with all columns and constraints:
```bash
php artisan migrate
```
*(If starting completely fresh, you can run `php artisan migrate:fresh`)*

---

### 8. Start the Local Server
```bash
php artisan serve
```
Open your browser and visit:  
👉 **`http://127.0.0.1:8000`**

---

## 🧭 Complete Routing & Navigation Directory

| Module | List / View URL | Add / Create Form URL | Form Action (POST) |
|---|---|---|---|
| **Dashboard** | `http://127.0.0.1:8000/` | — | — |
| **Students** | `http://127.0.0.1:8000/student` | `http://127.0.0.1:8000/student-create` | `/student-store` |
| **Employees** | `http://127.0.0.1:8000/employee` | `http://127.0.0.1:8000/employee-create` | `/employee-store` |
| **Branches** | `http://127.0.0.1:8000/branch` | `http://127.0.0.1:8000/branch-create` | `/branch-store` |
| **Enquiries** | `http://127.0.0.1:8000/enquiry` | `http://127.0.0.1:8000/enquiry-create` | `/enquiry-store` |
| **Countries** | `http://127.0.0.1:8000/country` | `http://127.0.0.1:8000/create-country` | `/country-store` |
| **States** | `http://127.0.0.1:8000/state` | `http://127.0.0.1:8000/create-state` | `/state-store` |
| **Cities** | `http://127.0.0.1:8000/city` | `http://127.0.0.1:8000/create-city` | `/city-store` |

---

## 🗄️ Database Tables & Schema Reference

### 1. `employees`
| Column | Type | Nullable | Description |
|---|---|---|---|
| `id` | `BIGINT UNSIGNED` | No | Auto-incrementing Primary Key |
| `name` | `VARCHAR(255)` | No | Full Name |
| `email` | `VARCHAR(255)` | No | Unique Email |
| `phone` | `VARCHAR(20)` | Yes | Contact Phone |
| `department` | `VARCHAR(255)` | Yes | Department (e.g. General Medicine) |
| `salary` | `VARCHAR(50)` | Yes | Salary (Accepts 50000 or 1.5k) |
| `joining_date` | `DATE` | No | Defaults to `CURRENT_DATE` |
| `address` | `TEXT` | Yes | Home Address |
| `created_at` | `TIMESTAMP` | No | Defaults to `CURRENT_TIMESTAMP` |
| `updated_at` | `TIMESTAMP` | No | Defaults to `CURRENT_TIMESTAMP ON UPDATE` |

### 2. `students`
| Column | Type | Nullable | Description |
|---|---|---|---|
| `id` | `BIGINT UNSIGNED` | No | Primary Key |
| `name` | `VARCHAR(255)` | No | Student Name |
| `email` | `VARCHAR(255)` | No | Unique Email |
| `phone` | `VARCHAR(20)` | Yes | Phone Number |
| `address` | `TEXT` | Yes | Address |
| `class` | `VARCHAR(50)` | Yes | Enrolled Class / Batch |
| `aadhar_card_number` | `VARCHAR(50)` | Yes | Aadhar Card / Government ID |
| `status` | `VARCHAR(10)` | Yes | Status (Default `'1'` = Active) |
| `created_at` / `updated_at` | `TIMESTAMP` | Yes | Standard Timestamps |

### 3. `branches`
| Column | Type | Nullable | Description |
|---|---|---|---|
| `id` | `BIGINT UNSIGNED` | No | Primary Key |
| `name` | `VARCHAR(255)` | No | Unique Branch Name |
| `code` | `VARCHAR(50)` | No | Unique Branch Code |
| `phone` | `VARCHAR(20)` | Yes | Branch Phone |
| `address` | `TEXT` | Yes | Branch Location |
| `status` | `VARCHAR(10)` | Yes | Default `'1'` (Active) |
| `created_at` / `updated_at` | `TIMESTAMP` | Yes | Standard Timestamps |

### 4. `countries`, `states`, `cities`
| Column | Type | Description |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary Key |
| `name` | `VARCHAR(255)` | Unique Name |
| `created_at` / `updated_at` | `TIMESTAMP` | Auto Timestamps |

### 5. `enquiries`
| Column | Type | Description |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary Key |
| `name` | `VARCHAR(255)` | Prospect Name |
| `email` | `VARCHAR(255)` | Contact Email |
| `message` | `TEXT` | Enquiry Message |
| `created_at` / `updated_at` | `TIMESTAMP` | Auto Timestamps |

---

## 📂 Project Architecture (MVC)

```text
studentmanagmnetsystem/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php       # Controller handling all CRUD operations
│   └── Models/
│       ├── Employee.php             # Employee Model ($table = 'employees')
│       ├── Student.php              # Student Model
│       ├── Branch.php               # Branch Model
│       ├── Country.php              # Country Model
│       ├── State.php                # State Model
│       ├── City.php                 # City Model
│       └── Enquiry.php              # Enquiry Model
├── database/
│   └── migrations/                  # Schema migration files for all 7 tables
├── resources/
│   └── views/
│       ├── employee/                # Employee index.blade.php & create.blade.php
│       ├── Student/                 # Student index.blade.php & create.blade.php
│       ├── branch/                  # Branch index.blade.php & create.blade.php
│       ├── City/                    # City index.blade.php & create.blade.php
│       ├── state/                   # State index.blade.php & create.blade.php
│       ├── country/                 # Country index.blade.php & create.blade.php
│       ├── enquiry/                 # Enquiry index.blade.php & create.blade.php
│       └── inc/                     # Reusable header, sidebar, footer partials
└── routes/
    └── web.php                      # Application Web Routes
```

---

## 💡 Troubleshooting & Common Fixes

| Issue / Error | Cause | Solution |
|---|---|---|
| **SQLSTATE[42S22] Unknown column** | Missing columns in migration | Defined all columns in migrations and ran `php artisan migrate:fresh`. |
| **#1265 Data truncated for 'salary'** | Salary was `DECIMAL(10,2)` and `'1.5k'` was inserted | Changed column to `string('salary', 50)` to support numbers & text. |
| **#1062 Duplicate entry for PRIMARY** | Manually typing `id = 1` in phpMyAdmin | Leave `id` completely blank; MySQL auto-increments it automatically. |
| **Class "Employee" not found** | Model file was named `employess.php` | Created `app/Models/Employee.php` with `protected $table = 'employees'`. |

---

## 🤝 Contributing & Support

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/NewFeature`)
3. Commit your Changes (`git commit -m 'Add some NewFeature'`)
4. Push to the Branch (`git push origin feature/NewFeature`)
5. Open a Pull Request

---

## 📄 License

This project is open-source and licensed under the [MIT License](LICENSE).

<p align="center">
  Crafted with ❤️ by <a href="https://github.com/suhaimali">Suhaim Ali</a>
</p>
