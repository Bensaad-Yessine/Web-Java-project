# EspritFlow – Student Daily Task Manager

## Overview
This project was developed as part of the **PIDEV – 3rd Year Engineering Program** at **Esprit School of Engineering** (Academic Year 2025–2026).

**EspritFlow** is a web application designed to help Esprit students manage their daily academic tasks, organize their schedule, and boost their productivity throughout the semester.

## Features
- ✅ Create, edit, and delete daily tasks
- 📅 Organize tasks by date and priority
- 🔔 Task reminders and notifications
- 📊 Progress tracking dashboard
- 👤 Student authentication and profiles
- 🗂️ Task categorization (courses, projects, exams...)

## Tech Stack

### Frontend
- Twig (Symfony templating engine)
- Bootstrap 5
- JavaScript

### Backend
- PHP 8
- Symfony 6
- Doctrine ORM

### Database
- MySQL

## Architecture
The application follows the **MVC (Model-View-Controller)** architecture provided by the Symfony framework:
- **Model** – Doctrine entities managing the database
- **View** – Twig templates rendering the UI
- **Controller** – Symfony controllers handling business logic

## Contributors
| Name | GitHub |
|------|--------|
| Bensaad Yessine | [@Bensaad-Yessine](https://github.com/Bensaad-Yessine) |

## Academic Context
Developed at **Esprit School of Engineering – Tunisia**
PIDEV – 3A33 | 2025–2026

## Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- Symfony CLI
- MySQL

### Installation

```bash
# Clone the repository
git clone https://github.com/Bensaad-Yessine/Esprit-PIDEV-3A33-2026-EspritFlow.git

# Navigate to the project folder
cd Esprit-PIDEV-3A33-2026-EspritFlow

# Install dependencies
composer install

# Configure your .env file
cp .env .env.local
# Edit .env.local and set your DATABASE_URL

# Create the database
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Start the server
symfony server:start
```

### Access the app
Open your browser and go to: `http://localhost:8000`

## Deployment
🌐 Live demo: [EspritFlow on Vercel](#) *(remplace avec ton vrai lien)*

## Acknowledgments
Special thanks to our supervisors and to **Esprit School of Engineering** for providing us with the tools and environment to build this project.
