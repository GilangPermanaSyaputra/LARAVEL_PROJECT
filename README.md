# 🚀 LARAVEL PROJECT

<p align="center">
  <strong>My Laravel Learning Journey</strong>
</p>

<p align="center">
  A Laravel-based project created to explore web development, understand MVC architecture, and practice building web applications.
</p>

<p align="center">
  ![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
  ![PHP](https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white)
  ![Status](https://img.shields.io/badge/Status-In%20Development-yellow?style=for-the-badge)
</p>

---

## 📌 About The Project

**LARAVEL_PROJECT** is a web development project built using Laravel 13.

This project serves as a learning environment to understand how Laravel works, implement the MVC (Model, View, Controller) architecture, and practice developing web applications using PHP.

## 🛠️ Built With

- **Laravel 13** — PHP web application framework.
- **PHP 8.3+** — Server-side programming language.
- **MySQL** — Database management system.
- **Blade** — Laravel templating engine.
- **HTML & CSS** — Web structure and styling.
- **JavaScript** — Frontend interactivity.

## 📂 Project Structure

```text
LARAVEL_PROJECT/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── package.json
```

## ⚙️ Installation

Follow these steps to run the project locally.

**1. Clone the repository**

```bash
git clone https://github.com/GilangPermanaSyaputra/LARAVEL_PROJECT.git
```

**2. Enter the project directory**

```bash
cd LARAVEL_PROJECT
```

**3. Install PHP dependencies**

```bash
composer install
```

**4. Create environment configuration**

Windows:

```bash
copy .env.example .env
```

Linux / macOS:

```bash
cp .env.example .env
```

**5. Generate application key**

```bash
php artisan key:generate
```

**6. Configure the database**

Open the `.env` file and adjust your database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_project
DB_USERNAME=root
DB_PASSWORD=
```

Create the database before running migrations.

**7. Run database migrations**

```bash
php artisan migrate
```

**8. Install frontend dependencies**

```bash
npm install
```

**9. Build frontend assets**

```bash
npm run build
```

**10. Start the Laravel development server**

```bash
php artisan serve
```

Open your browser:

```text
http://127.0.0.1:8000
```

## 💻 Development

If you want to develop the frontend while editing files, run:

```bash
npm run dev
```

Keep the Vite development server running in a separate terminal alongside `php artisan serve`.

## 📸 Screenshots

Screenshots of the application will be added here.

## 👨‍💻 Developer

**Gilang Permana Syaputra**

- GitHub: [@GilangPermanaSyaputra](https://github.com/GilangPermanaSyaputra)

---

<p align="center">
  Made with ❤️ using Laravel
</p>
