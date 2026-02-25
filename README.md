# Laravel Authentication Application

A Laravel 12 application with authentication and OAuth integration for shared session management across multiple applications.

## Features

- User authentication (login/logout)
- Shared session management across applications
- MySQL database support
- Tailwind CSS for styling
- Vite for asset bundling

## Requirements

- PHP 8.2 or higher
- Composer
- MySQL 8.0 or higher





4. Update your `.env` file with database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_COOKIE=shared_app_session
SESSION_PATH=/
SESSION_DOMAIN=127.0.0.1
SESSION_SECURE_COOKIE=false
SESSION_HTTP_ONLY=true
SESSION_SAME_SITE=lax

```

5. Run migrations:
```bash
php artisan migrate
```


## Project Structure

```
app/
├── Http/
│   └── Controllers/
│       └── Auth/
│           └── LoginController.php
│           └── SsoController.php
            
└── Models/
    └── User.php
config/
├── auth.php
├── passport.php
└── session.php
database/
├── migrations/
└── seeders/
resources/
├── views/
│   └── dashboard.blade.php
│   └── auth/
│       └── login.blade.php
└── css/
routes/
└── web.php
```

## Available Routes

- `GET /` - Redirects to login
- `GET /login` - Show login form
- `POST /login` - Process login
- `POST /logout` - Logout user
- `GET /dashboard` - Dashboard (requires authentication)

 