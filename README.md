# Web Technologies Projects Repository

This repository contains a collection of beginner-friendly web projects developed using web technologies like HTML, PHP, and MySQL. Each project demonstrates a specific functionality commonly used in web development.  

## Projects Overview

### 1. Contact Form with Backend
**Folder:** `ContactFormWithBackend`  
This project implements a simple contact form that allows users to send messages through the website.  

**Files:**
- `contact.html`: Frontend form for users to input their name, email, and message.
- `contact.php`: Backend script to handle form submissions and send the message.

**Features:**
- Form validation on the backend.
- Email or database integration for form submission handling (extendable).  

---

### 2. E-Commerce Web with Backend
**Folder:** `ECommereceWebWithBackend`  
This project connects to a MySQL database and allows basic management of products.

**Files:**
- `products.html`: Displays a static frontend for managing products.
- `viewproducts.php`: Fetches and displays all records from a "products" table in a MySQL database.
- `addproducts.php`: Script to add new products to the database.

**Features:**
- MySQL integration for product management.
- Demonstrates CRUD operations using PHP and MySQL.

---

### 3. Authentication with Backend
**Folder:** `AuthenticationWithBackend`  
This project implements a user authentication system for a website, including login, registration, and logout functionalities.

**Files:**
- `index.html`: Homepage for the website.
- `register.php`: Backend script for registering new users.
- `login.php`: Backend script for authenticating users.
- `logout.php`: Backend script for logging users out.

**Features:**
- User registration with data stored in a MySQL database.
- Secure user authentication using PHP.
- Session management for user login and logout.

---

## Prerequisites
- **Server Requirements:** Apache or any server capable of running PHP.  
- **Database:** MySQL server to handle the backend operations for the `ECommereceWebWithBackend` and `AuthenticationWithBackend` projects.  

## How to Run
1. Clone this repository to your local machine:
   ```bash
   git clone https://github.com/Vaishnavi639/Webapp.git
2. Set up a local server (e.g., XAMPP, WAMP, or MAMP).

3. Copy the project folders into the server's htdocs directory or equivalent.

4. Import the required database tables:

  -Use the .sql files (if provided) to set up the database for ECommereceWebWithBackend and AuthenticationWithBackend.
  -Update the database connection details (host, username, password, database) in the PHP files.
  -Open the project URLs in your browser:

Contact Form: http://localhost/ContactFormWithBackend/contact.html
E-Commerce: http://localhost/ECommereceWebWithBackend/products.html
Authentication: http://localhost/AuthenticationWithBackend/index.html

## Future Improvements
1. Enhance the UI/UX using CSS or JavaScript.
2. Add validation to the forms for better user input handling.
3. Implement secure practices such as password hashing for authentication.
4. Extend CRUD operations for more comprehensive functionality.
