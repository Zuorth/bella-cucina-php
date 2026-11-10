# Bella Cucina – PHP Header/Footer Site

A small restaurant website showing how to reuse a header and footer with PHP `include()` (Chapter 5).

## Files
| File | Purpose |
|------|---------|
| `header.php` | Logo, site title, and navigation bar shared by every page |
| `footer.php` | Open/closed status, contact info, and copyright shared by every page |
| `index.php` | Home page |
| `menu.php` | Menu built from a PHP array with loops |
| `contact.php` | Opening hours and a reservation form |
| `styles.css` | Shared styles |

## How it works
Each content page sets `$pageTitle` and `$currentPage`, then calls `include('header.php')`
at the top and `include('footer.php')` at the bottom. Changing the header or footer
updates every page at once.

## Run it
```
php -S localhost:8000
```
Then open http://localhost:8000 in a browser.
