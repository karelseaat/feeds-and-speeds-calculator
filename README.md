 # Feeds and Speeds Calculator

This is a web-based application designed to help machinists and CNC programmers determine the optimal spindle speed (RPM) and feed rate for their cutting operations. The application supports both Imperial and Metric units.

## Features

-   Calculate Spindle Speed (RPM)
-   Calculate Feed Rate (IPM or mm/min)

## Installation

1. **Clone the repository:**
    ```bash
    git clone <repository-url>
    ```
2. **Navigate to the project directory:**
    ```bash
    cd feeds-and-speeds-calculator
    ```
3. **Install dependencies:**
    ```bash
    composer install
    ```
4. **Create a copy of the `.env.example` file:**
    ```bash
    cp .env.example .env
    ```
5. **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
6. **Run the database migrations:**
    ```bash
    php artisan migrate
    ```
7. **Start the development server:**
    ```bash
    php artisan serve
    ```
8. Open your browser and navigate to `http://127.0.0.1:8000/calculator`.

## Technical Details

The application is built using Laravel, a PHP web application framework that emphasizes simplicity, elegance, and clean coding. The front-end is implemented using plain HTML, CSS, and JavaScript, with some additional libraries such as jQuery for enhanced functionality.

For the development environment, the project uses PHP 8.x as the server-side language, MySQL as the database management system, and Nginx as the web server. The application also utilizes a build tool called Laravel Mix for asset compilation during development and production.

In terms of routing, the application follows standard RESTful conventions. For example, to access the calculator, navigate to `http://127.0.0.1:8000/calculator`.

## Contribution

Contributions are always welcome! If you'd like to contribute, please fork the repository and submit a pull request with your changes. Before submitting, please ensure that your code adheres to the PSR-2 coding standards and follows Laravel's conventions.

## License

This project is open-source and released under the MIT License. For more information, see the `LICENSE` file in this repository.

## Contact

If you encounter any issues or have questions, feel free to reach out via email at [your.email@example.com](mailto:your.email@example.com). I'll do my best to help!