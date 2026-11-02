# Merriment
Merriment is a festive ClassicPress theme made to celebrate Christmas. It pairs a snowy header image and a cozy holiday background with evergreen, holly red and candlelight gold accents, and it is responsive and mobile ready.

## Requirements
* ClassicPress 2.0 or later
* PHP 7.4 or later

## Development
The theme's PHP dependencies come from Composer and its assets are built with [Vite](https://vite.dev).

* Node.js 20.19 or later, or 22.12 or later
* Composer

<pre>
composer install --no-dev
npm ci
npm run build
</pre>

`npm run prod` builds the assets into `public/assets`, `npm run watch` rebuilds them as you work, and `npm run build` also exports the theme into the `merriment` folder, ready to zip.

The styles are in `resources/scss`; the palette is in `01.settings/_colors.scss`. The scripts are in `resources/js`.

## Releasing
Set `Version` in `style.css`, then publish a GitHub release whose tag matches it (for example `0.0.1`). The release workflow builds the theme and attaches `merriment.{version}.zip` to the release.

## Child themes
To customize Merriment, create a child theme.

* Create a theme folder in your `wp-content/themes` directory called `merriment-child`.
* Create a `style.css` file within your theme folder.
* At the top of your `style.css` file, add the below information.

<pre>
/*!
 * Theme Name: Merriment Child
 * Theme URI: https://link-to-your-site.com
 * Description: Describe what your theme should be like.
 * Version: 0.1
 * Author: Your Name
 * Author URI: https://link-to-your-site.com
 * Template: merriment
 */
</pre>

`Template` must be the parent theme's folder name, `merriment`.

## Credits
This theme bundles the following resources
* [FontAwesome](https://fontawesome.com) - [CC by 4.0 License](https://creativecommons.org/licenses/by/4.0) - The social and post meta icons.
* [Backdrop](https://github.com/backdrop-dev) - By Benjamin Lu - GNU GPL, version 2 or higher.

This theme bundles the following open-source fonts, served from the theme itself.

* [Fira Sans](https://fonts.google.com/specimen/Fira+Sans) ([SIL Open Font License 1.1](http://scripts.sil.org/OFL))
* [Merriweather](https://fonts.google.com/specimen/Merriweather) ([SIL Open Font License 1.1](http://scripts.sil.org/OFL))
* [Tangerine](https://fonts.google.com/specimen/Tangerine) ([SIL Open Font License 1.1](http://scripts.sil.org/OFL))

This theme bundles the following images, made for Merriment and licensed under the GNU GPL, version 2 or later, like the theme:

* `public/images/header-image.jpg` - a snowy evergreen forest with a cabin under the moon.
* `public/images/background.jpg` - holly, snowflakes and gold stars on evergreen.
* `screenshot.png`

The sources of the two images are in `resources/images` as SVG.

## Copyright & License
Merriment is licensed under the GNU Public License, version 2 or later (GPL).

This theme is copyrighted to [Benjamin Lu](https://benjlu.com)

2016-2026. © Benjamin Lu
