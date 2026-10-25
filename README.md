# tkouleris.eu

Source code of [tkouleris.eu](https://tkouleris.eu), the personal website of **Thodoris Kouleris**, Software Engineer.

The site is a small Laravel application that serves a personal homepage, an about page, a resume, a showcase of side projects and a blog.

## Features

- **Home**: profile photo, title and links to social profiles (GitHub, LinkedIn, X, Bluesky).
- **About**: a short bio.
- **Resume**: work experience and skills, with a downloadable CV (`public/cv/T.Kouleris.pdf`).
- **Projects**: personal projects with links to their live demos and GitHub repositories.
- **Blog**: articles, browsable by year, by tag (category) and through an archive page.

The blog needs no database. Posts are stored as JSON files under `storage/data/blog` and read directly by the controller.

## Tech stack

- PHP 8.2+ / [Laravel 12](https://laravel.com)
- Blade templates with plain CSS and JavaScript (`public/v3`)
- Font Awesome for icons

## Routes

| URL              | Description                              |
|------------------|------------------------------------------|
| `/`              | Home page                                |
| `/about`         | About me                                 |
| `/resume`        | Resume                                   |
| `/projects`      | Projects showcase                        |
| `/blog`          | Blog posts of the current year           |
| `/blog/{page}`   | A single blog post                       |
| `/tag/{tag}`     | Blog posts in a category                 |
| `/year/{year}`   | Blog posts published in a given year     |
| `/archive`       | List of all tags and years               |

All routes are handled by `App\Http\Controllers\V3Controller`.

## Project structure

```
app/Http/Controllers/V3Controller.php      Page and blog controller
app/Console/Commands/CreateBlogFiles.php   Builds the blog index files
resources/views/v3/                        Blade views and partials (menu, footer)
public/v3/                                 Site CSS and JavaScript
public/img, public/cv, public/apps         Images, CV and downloadable apps
storage/data/blog/                         Blog content (JSON)
template/                                  Static HTML prototype of the design
```

## Blog content

All posts live in a single source file, `storage/data/blog/blog.json`. Each post looks like this:

```json
{
    "url": "https://tkouleris.eu/blog/margaret-hamilton",
    "page": "margaret-hamilton",
    "category": "tech heroes",
    "year": 2026,
    "title": "Margaret Hamilton: Woman on the moon",
    "image": "https://tkouleris.eu/img/blog/tech-heroes/margaret-hamilton.webp",
    "date": "11 Oct 2026",
    "content": "<p>...</p>"
}
```

After you edit `blog.json`, regenerate the index files that the site reads:

```bash
php artisan blog:create
```

The command writes three files:

- `storage/data/blog/page/data.json`: posts keyed by their `page` slug
- `storage/data/blog/tags/data.json`: posts grouped by `category`
- `storage/data/blog/year/data.json`: posts grouped by `year`

> **Note:** the command currently builds its paths with Windows-style backslashes, so run it on Windows (or adjust the paths) and commit the generated files.

## Local development

Requirements: PHP 8.2+, Composer and Node.js (optional, only for Vite).

```bash
git clone https://github.com/tkouleris/myWebpage.git
cd myWebpage
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

The site is then available at `http://localhost:8000`. No database setup is needed to browse the pages.

## License

This project's code is released under the MIT license. The site content (texts, blog posts, images and CV) belongs to Thodoris Kouleris.
