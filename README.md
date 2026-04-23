# PHP Laravel Product API

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

