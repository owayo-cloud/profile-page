# profile-page
# Laravel Profile Management System

This is a full-stack Laravel application that allows users to manage their profiles. It includes features to **view**, **update**, and **delete** user profiles. The application uses Laravel's MVC architecture and follows best practices for routing, controllers, and views.

## Features

- **View Profile**: Displays user profile details.
- **Update Profile**: Allows users to update their profile information.
- **Delete Profile**: Allows users to delete their profile.
- **Profile Validation**: Ensures the user inputs are valid when updating their profile.

## Requirements

Before you begin, ensure that you have the following installed:

- PHP >= 8.0
- Composer
- Laravel >= 10.x
- MySQL or SQLite (depending on your preference)
- A web server (Apache/Nginx)

## Installation

Follow the steps below to get your development environment up and running:

1. **Clone the repository**:

   ```bash
   git clone https://github.com/owayo-cloud/profile-page.git
   cd profile-page 

2. **Install Dependencies**:

```bash
composer install
```

3. **Environment Setup**:

```bash
cp .env.example .env
```
Configure your .env file with the correct database settings.

4. **Generate Application Key**:

```bash
php artisan key:generate
```

5. **Run Migrations**:

```bash
php artisan migrate
```

6. **Start the Development Server**:

```bash
php artisan serve
```
Your application will be accessible at http://localhost:8000.

# Usage
Once the application is up and running, you can:

View Profile: Navigate to /profile/{id} to see a user's profile.
Update Profile: Use a POST request at /profile/{id} to update profile information.
Delete Profile: Use a DELETE request at /profile/{id} to delete a profile.

# Contact
For any inquiries or issues, please contact us at [owayopaul@gmail.com].

markdown
Copy code

### Explanation of the Sections:

- **Project Overview**: A brief description of what your application does (view, update, delete profiles).
- **Features**: Highlights the key features your project includes.
- **Requirements**: Lists the system requirements needed to run the application.
- **Installation**: Detailed steps to install and run the project, including setting up dependencies and running migrations.
- **Usage**: Explains how to use the application, including API routes and controlle

# For those using Tailwind
## Install Tailwind CSS:
### In your Laravel project, run the following commands:

Install Laravel Mix and Tailwind:
```bash
npm install
npm install tailwindcss
npx tailwindcss init #Configure Tailwind
```

### Make sure your resources/css/app.css looks like this:

**css**
@tailwind base;
@tailwind components;
@tailwind utilities;

## In webpack.mix.js, add Tailwind to the CSS pipeline:

```js
const mix = require('laravel-mix');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);
```
### Run the following command to compile your CSS:
```bash
npm run dev
```
