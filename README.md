# Simple User Signup/Login/Logout System

This project is a simple user signup, login, and logout system implemented using HTML, Bootstrap 5.3, CSS, JavaScript, jQuery, MySQL, and PHP. It allows users to sign up for an account, log in with their credentials, and log out securely.

## Features

- User Signup: Users can create a new account by providing their name, email, password and profile picture.
- User Login: Registered users can log in securely with their email and password.
- User Logout: Users can log out of their account securely.

## Technologies Used

- HTML: Used for creating the structure and content of web pages.
- CSS: Used for styling the web pages and making them visually appealing.
- Bootstrap: Used for styling the website.
- JavaScript: Used for client-side interactions and form validation.
- jQuery: A JavaScript library used for simplifying DOM manipulation and event handling.
- MySQL: A relational database management system used for storing user data securely.
- PHP: A server-side scripting language used for handling server-side logic and interacting with the database.

## Setup Instructions

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your_username/simple-login-system.git
   ```

2. Set up the database:

   - Create a MySQL database named `simple_login_system`.
   - Import the SQL file `simpleloginusers` provided in the repository to create the necessary tables.

3. Configure the server:

   - Ensure that xampp or lampp or wampp is installed on your server.
   - Start the apache web server to serve the files from the project directory.
   - Start the MySQL server to serve the database.

4. Start the server:

   - Start your web server.
   - Navigate to the project URL in your web browser.

5. Use the application:

   - Sign up for a new account using the signup form.
   - Log in with your email and password.
   - Log out securely when done.

## File Structure

```
simple-login-system/
│
├── Database/
│   └── simpleloginusers.sql
│
├── php_utils/
│   └── _dbconnect.php
│
├── uploads/
|   └── Very Important, the profile pictures will be uploaded here
│
├── index.html
├── loginapi.php
├── signup.html
├── signupapi.php
├── welcome.php
├── logout.php
```

## Contributions

Contributions to this project are welcome! If you have any suggestions for improvements or find any issues, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
