# PHP Laravel Product API (Laravel)

## Features
- AUTH FLOW
  👉 Register → Login → Logout → Refresh Token → Profile
  👉 JWT + Role (admin/user)
- JWT Authentication
- Role-based authorization (admin/user)
- CRUD Product
- Validation & business logic

## Tech
- Laravel
- MySQL
- JWT

## Run
 - composer create-project laravel/laravel ProductApi
 - cd ProductApi
 - composer require tymon/jwt-auth
 - php artisan jwt:secret
 
 - Test:
 - Bash: php artisan make:model Product -m ==> PHP: Schema::create('products', function (Blueprint $table) {
						    $table->id();
						    $table->string('name');
						    $table->decimal('price', 10, 2);
						    $table->integer('quantity');
						    $table->timestamps();
						});
 
 - php artisan migrate
 - php artisan make:middleware RoleMiddleware
 - php artisan make:controller ProductController
 
 - ex use case postman tool
 - POST /api/login
 - POST /api/login  
 - GET /api/products  
 - POST /api/products (admin)  
 - PUT /api/products/{id} (admin)  
 - DELETE /api/products/{id} (admin)


## API
POST /api/register
POST /api/login  
POST /api/logout
POST /api/refresh       //refresh token
GET /api/me             //get user information

GET /api/products  
POST /api/products (admin)  
PUT /api/products/{id} (admin)  
DELETE /api/products/{id} (admin)

