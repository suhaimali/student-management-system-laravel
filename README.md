# 🎓 Student & Academy Management System

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

A modern **Student & Academy Management System (ERP)** built with **Laravel**, **MySQL**, and the **Skydash Admin Dashboard Template**. It provides a comprehensive solution for educational institutions to manage students, employees, branches, geographical locations, and customer enquiries.

---

## 📌 Features & Modules

- 👨‍🎓 **Student Management:**
  - View all registered students
  - Add new students with details (Name, Email, Phone, Address, Class, Aadhar Card Number, Status)
- 👔 **Employee Management:**
  - Complete Employee records (Name, Email, Phone, Department, Salary, Joining Date, Address)
  - Auto-generated timestamps (`created_at`, `updated_at`) and automatic current joining dates
- 🏢 **Branch Management:**
  - Multi-branch support with branch code, phone, address, and status
- 🗺️ **Geographical Master Data:**
  - **Country Management** (Add & list countries)
  - **State Management** (Add & list states)
  - **City Management** (Add & list cities)
- 📩 **Enquiry Management:**
  - Capture and list public/admission enquiries (Name, Email, Message)
- 📊 **Responsive Dashboard:**
  - Powered by Skydash Admin Dashboard with charts, tables, and responsive mobile-ready sidebar

---

## 🛠️ Tech Stack

- **Backend Framework:** [Laravel 12](https://laravel.com)
- **Programming Language:** PHP 8.2+
- **Database:** MySQL
- **Frontend / UI:** Blade Templating, Bootstrap 5, Skydash Admin Template
- **Icons & Assets:** Feather Icons, Themify Icons, Material Design Icons (MDI)

---

## 🚀 Beginner's Step-by-Step Installation Guide

Follow these instructions step by step to run this project on your local machine:

### 1. Prerequisites
Make sure you have installed on your computer:
- [PHP](https://www.php.net) (Version 8.2 or higher)
- [Composer](https://getcomposer.org)
- [XAMPP](https://www.apachefriends.org) or any MySQL database server
- [Git](https://git-scm.com)

---

### 2. Clone the Repository
Open your terminal or command prompt and run:
```bash
git clone https://github.com/suhaimali/student-management-system-laravel.git
cd student-management-system-laravel
```

---

### 3. Install PHP Dependencies
```bash
composer install
```

---

### 4. Setup Environment File
Copy the example environment file:
```bash
cp .env.example .env
```
*(On Windows Command Prompt, use: `copy .env.example .env`)*

---

### 5. Generate Application Key
```bash
php artisan key:generate
```

---

### 6. Configure MySQL Database
1. Open XAMPP and start **Apache** and **MySQL**.
2. Go to **phpMyAdmin** (`http://localhost/phpmyadmin`).
3. Create a new database named **`emr_software`** (or your preferred name).
4. Open your `.env` file and set your database credentials:
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
Create all tables automatically with all required columns:
```bash
php artisan migrate
```

---

### 8. Start the Local Server
```bash
php artisan serve
```

Now open your browser and navigate to:
👉 **`http://127.0.0.1:8000`**

---

## 🧭 Application Routes

| Module | List Page URL | Add / Create URL |
|---|---|---|
| **Dashboard** | `http://127.0.0.1:8000/` | - |
| **Students** | `http://127.0.0.1:8000/student` | `http://127.0.0.1:8000/student-create` |
| **Employees** | `http://127.0.0.1:8000/employee` | `http://127.0.0.1:8000/employee-create` |
| **Branches** | `http://127.0.0.1:8000/branch` | `http://127.0.0.1:8000/branch-create` |
| **Enquiries** | `http://127.0.0.1:8000/enquiry` | `http://127.0.0.1:8000/enquiry-create` |
| **Countries** | `http://127.0.0.1:8000/country` | `http://127.0.0.1:8000/create-country` |
| **States** | `http://127.0.0.1:8000/state` | `http://127.0.0.1:8000/create-state` |
| **Cities** | `http://127.0.0.1:8000/city` | `http://127.0.0.1:8000/create-city` |

---

## 🗄️ Database Tables Structure

### `employees` Table
| Column | Type | Description |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary Key (Auto-increment) |
| `name` | `VARCHAR(255)` | Employee Name |
| `email` | `VARCHAR(255)` | Unique Email |
| `phone` | `VARCHAR(20)` | Phone Number |
| `department`| `VARCHAR(255)` | Department name |
| `salary` | `VARCHAR(50)` | Salary (Supports 50000 or 1.5k) |
| `joining_date` | `DATE` | Default Current Date |
| `address` | `TEXT` | Full Address |
| `created_at` | `TIMESTAMP` | Auto Current Timestamp |
| `updated_at` | `TIMESTAMP` | Auto Current Timestamp |

### `students` Table
| Column | Type | Description |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary Key |
| `name` | `VARCHAR(255)` | Student Name |
| `email` | `VARCHAR(255)` | Unique Email |
| `phone` | `VARCHAR(20)` | Contact Number |
| `address` | `TEXT` | Residential Address |
| `class` | `VARCHAR(50)` | Enrolled Class/Course |
| `aadhar_card_number` | `VARCHAR(50)` | Identification Number |
| `status` | `VARCHAR(10)` | Status (1 = Active) |

### `branches` Table
| Column | Type | Description |
|---|---|---|
| `id` | `BIGINT UNSIGNED` | Primary Key |
| `name` | `VARCHAR(255)` | Unique Branch Name |
| `code` | `VARCHAR(50)` | Unique Branch Code |
| `phone` | `VARCHAR(20)` | Branch Contact |
| `address` | `TEXT` | Branch Location |
| `status` | `VARCHAR(10)` | Active / Inactive |

---

## 📁 Directory Architecture (MVC)

```text
studentmanagmnetsystem/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php       # Controller handles all CRUD requests
│   └── Models/
│       ├── Employee.php             # Employee Eloquent Model
│       ├── Student.php              # Student Eloquent Model
│       ├── Branch.php               # Branch Eloquent Model
│       ├── Country.php              # Country Eloquent Model
│       ├── State.php                # State Eloquent Model
│       ├── City.php                 # City Eloquent Model
│       └── Enquiry.php              # Enquiry Eloquent Model
├── database/
│   └── migrations/                  # Database table definitions
├── resources/
│   └── views/
│       ├── employee/                # Employee index & create blade templates
│       ├── Student/                 # Student index & create blade templates
│       ├── branch/                  # Branch index & create blade templates
│       ├── enquiry/                 # Enquiry index & create blade templates
│       ├── country/                 # Country index & create blade templates
│       ├── state/                   # State index & create blade templates
│       ├── City/                    # City index & create blade templates
│       └── inc/                     # Reusable header, sidebar, footer partials
└── routes/
    └── web.php                      # Application Web Routes
```

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues page](https://github.com/suhaimali/student-management-system-laravel/issues).

---

## 📄 License

This project is open-sourced software licensed under the [MIT License](LICENSE).

---

<p align="center">
  Made with ❤️ by <a href="https://github.com/suhaimali">Suhaim Ali</a>
</p>
