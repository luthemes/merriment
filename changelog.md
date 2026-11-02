# Change Log

## 0.0.3 - 11.02.2026
### Added
- The translation template, `public/lang/merriment.pot`, now includes the strings that come from the Backdrop framework, such as the pagination's Previous and Next, "Search results for: %s", "Archives" and the customizer's Theme: panels. The framework translates them through the theme's own text domain, so they are translated along with the rest of the theme; until now they were missing from the template, so they stayed in English.

## 0.0.2 - 11.02.2026
### Changed
- Requires PHP 7.4 or later instead of 8.0, like the other luthemes themes. The theme doesn't use anything that needs PHP 8.

## 0.0.1 - 11.02.2026
Merriment relaunched for ClassicPress, built on the Backdrop framework. Everything's new!

### Added
- Templates for the posts list, single posts, pages, archives and search results, 404 and no results, and threaded comments with the comment form.
- A primary menu with dropdowns on larger screens and a Menu button at the bottom left on small screens, and a social menu in the footer with icons for common sites.
- Customize -> Theme: Content -> Layout: left sidebar, right sidebar or no sidebar.
- A custom header image with the site title over it, and a custom background. The default header image, background and screenshot were made for Merriment and are licensed under the GPL like the theme.
- Primary and Footer widget areas.
- A Christmas palette (evergreen, holly red and candlelight gold) with Fira Sans headings, Merriweather text and dates in Tangerine.
- If the theme's `vendor` folder is missing, administrators see a notice explaining how to fix it, and visitors get a 503 page, instead of a fatal error.

### Development
- Requires ClassicPress 2.0 or later and PHP 8.0 or later.
- Built on the `develop` branch of `backdrop-dev/framework`, with `backdrop-dev/framework` and `backdrop-dev/fonts` pinned to tested commits.
- Assets are built with Vite (`npm run build`, Node 20.19 or 22.12 and later). `package-lock.json` pins the build tools, with Rollup and Immutable kept at patched versions.
- A release workflow builds and attaches the theme zip when a release is published, after checking the tag matches `style.css` and that `npm audit` finds no high or critical vulnerabilities.
