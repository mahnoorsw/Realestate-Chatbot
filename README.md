# **Project Intoduction**
#### Its a chatbot for RealEstate Business 
#### Used Botman in Laravel with trained Question Answers in DB.
#### Example Screenshots for this chabot

![image](https://github.com/user-attachments/assets/e9a799bf-4e93-48a1-a501-df7aa10e6cb3)
![image](https://github.com/user-attachments/assets/cb43842d-37cd-425b-bb2f-54c372abb8bf)
![image](https://github.com/user-attachments/assets/36d1d54b-2296-4b83-9ce6-bf5d3750a3b5)


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

