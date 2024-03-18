# WeebsBook

WeebsBook is a simple social media platform, inspired by Facebook, built using Laravel and styled with Bootstrap. This project aims to provide users with basic social media functionalities such as signing up, signing in, updating profile information, changing profile images, creating and updating posts with text, images, and videos.

## Features

1. **Sign Up**: Users can register for a new account on WeebsBook by providing necessary details.
2. **Sign In**: Registered users can log in to their accounts securely.
3. **Profile Management**:
   - **Update Profile Info**: Users can edit and update their profile information.
   - **Change Profile Image**: Users have the option to change their profile pictures.
4. **Post Management**:
   - **Create Posts**: Users can create new posts containing text, images, and videos.

## Installation

To run WeebsBook locally, follow these steps:

1. Clone this repository to your local machine.
   ```bash
   git clone https://github.com/kyzsuki/weebsbook.git
   ```

2. Navigate to the project directory.
   ```bash
   cd weebsbook
   ```

3. Install dependencies using Composer.
   ```bash
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`.
   ```bash
   cp .env.example .env
   ```

5. Generate application key.
   ```bash
   php artisan key:generate
   ```

6. Configure your database details in the `.env` file.

7. Migrate the database.
   ```bash
   php artisan migrate
   ```

8. Serve the application.
   ```bash
   php artisan serve
   ```

9. Visit `http://localhost:8000` in your web browser to access WeebsBook.

## Technologies Used

- **Laravel**: PHP framework for building web applications.
- **Bootstrap**: Frontend framework for responsive and mobile-first web development
