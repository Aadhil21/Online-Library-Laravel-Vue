# Online Library Application

## Overview
This project is an online library application that allows users to search for books by title, description, or genre, and borrow and return books. The application includes a dashboard with two tabs: 'Online Library' and 'My Library.' The 'Online Library' tab allows users to search and filter books and view a list of books. The 'My Library' tab displays books the user has selected.

## Features
- **Search Books**: Users can search for books by title, description, or genre.
- **Borrow Books**: Users can borrow available books.
- **Return Books**: Users can return borrowed books.
- **Pagination**: The book list is paginated to enhance user experience.
- **User Authentication**: Secure user registration and login.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Tech Stack
- **Frontend**:
  - Vue.js
  - Tailwind CSS
  - Breeze
  - Inertia.js
- **Backend**:
  - Laravel
  - SQLite
- **DevOps**:
  - GitHub Actions for CI/CD

## Assumptions
- **User Authentication**: Only authenticated users can borrow or return books.
- **Book Availability**: Books can only be borrowed if they are available.
- **Unique Borrow**: Users cannot borrow the same book multiple times without returning it first.

## Setup Instructions

### Prerequisites
- PHP >= 8.3
- Laravel >= 11
- Composer
- Node.js & npm
- SQLite

## How To Run
- cd online-library
- composer install
- npm install
- php artisan migrate
- npm run dev
- php artisan serve
