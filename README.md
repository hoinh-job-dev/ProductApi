# PHP Laravel Product API (Laravel)

## Description
Backend API for managing products with authentication and role-based access control.

## Features
- RESTful API design
- JWT Authentication
- Role-based authorization (admin/user)
- CRUD Product
- Middleware validation
- Database optimization


## Tech
- PHP(Laravel)
- MySQL
- JWT

## ⚙️ Setup
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

## Example Flow

### Step 1: Login
POST /api/login

Response:
{
  "access_token": "..."
}

---

### Step 2: Call API
GET /api/products

Header:
Authorization: Bearer TOKEN

---

### Step 3: Admin action
POST /api/products

Only admin can perform this action.

```
## API

- Authentication Flow
Login to get token
POST /api/login
Use token for API

- Authorization: Bearer TOKEN
API Endpoints
Login

- POST /api/login
POST /api/register
POST /api/login 
POST /api/logout
POST /api/refresh       //refresh token
GET /api/me             //get user information

Get Products
GET /api/products
Create Product (Admin only)
POST /api/products
PUT /api/products/{id} (admin) 
DELETE /api/products/{id} (admin)


- Business Flow
User login
System returns JWT token
User calls API with token
Admin can create/update/delete product
Normal user can only view products

- Demo (Optional)

You can test API using Postman.

## Postman Collection
Download here: ./postman_collection.json

- Author
Nguyen Hai Hoi

