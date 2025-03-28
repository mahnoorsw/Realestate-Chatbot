# **Project Intoduction**
#### Its a chatbot for RealEstate Business
#### Used Botman in Laravel with trained Question Answers in DB.

# **Project Setup Guide**

## **Prerequisites**

- PHP 8.2
- Laravel 10
- Node.js installed
- Composer installed globally

## **Installation Steps**
### 1. Clone the Repository
### 2. Verify Composer Installation
    composer --version

### 3. Install Composer Dependencies
    composer install

### 4. Checkout to Branch 'main'
    git checkout main

### 5. Copy .env.example to .env
#### Linux/macOS:
    cp .env.example .env
##### Windows:
    copy .env.example .env

### 6. Set Up Database
Create a MySQL database and Update the .env file with the database credentials
        
### 7. Run Migrations and Seed Database
    php artisan migrate:fresh --seed
   
### 8. Generate Application Key
    php artisan key:generate
    
### 9. Start the Local Server
    php artisan serve

