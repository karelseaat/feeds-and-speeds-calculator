# Feeds and Speeds Calculator

A simple calculator for machinists and CNC programmers. Input tool diameter, material, and chip load—get RPM and feed rate in Imperial or Metric.

## Features

- Calculates spindle speed (RPM) from surface speed (SFM or m/min) and tool diameter  
- Calculates feed rate (IPM or mm/min) from RPM, tooth load, and tooth count  
- No dependencies. Runs on PHP 8.x, MySQL, Nginx — standard LAMP stack

## Install

```bash
git clone <repository-url>
cd feeds-and-speeds-calculator
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Then open `http://127.0.0.1:8000/calculator`.

I built this because I got tired of digging through PDF charts or hunting for working web tools that broke after 2012.

## Technical bits

- Laravel 11 (PHP 8.2+)  
- MySQL 8  
- Front-end: vanilla JS + Bootstrap 5 (no bloat)  
- Asset pipeline via Laravel Mix  
- Routes: `/calculator` (GET), `/calculate` (POST)

## Contributing

Fork, make a branch, send a PR. Tests preferred but not required. Keep it PSR-12 and follow Laravel conventions.

## License

MIT. See `LICENSE` for details.

## Hit me up

Got a bug or idea? Email me: [your.email@example.com](mailto:your.email@example.com)

## More from Karelseaat

For more projects and experiments, visit my GitHub Pages site: [karelseaat.github.io](https://karelseaat.github.io/)
