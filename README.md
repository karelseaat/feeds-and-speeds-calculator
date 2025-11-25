# Feeds and Speeds Calculator

This is a simple web-based calculator for machinists and CNC programmers to determine the optimal spindle speed (RPM) and feed rate for their cutting operations. The calculator supports both Imperial and Metric units.

## Features

*   Calculate Spindle Speed (RPM)
*   Calculate Feed Rate (IPM or mm/min)
*   Support for both Imperial and Metric units

## Setup and Installation

1.  **Clone the repository:**
    ```bash
    git clone <repository-url>
    ```
2.  **Navigate to the project directory:**
    ```bash
    cd feeds-and-speeds-calculator
    ```
3.  **Install dependencies:**
    ```bash
    composer install
    ```
4.  **Create a copy of the `.env.example` file:**
    ```bash
    cp .env.example .env
    ```
5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
6.  **Run the database migrations:**
    ```bash
    php artisan migrate
    ```
7.  **Start the development server:**
    ```bash
    php artisan serve
    ```
8.  Open your browser and navigate to `http://127.0.0.1:8000/calculator`.