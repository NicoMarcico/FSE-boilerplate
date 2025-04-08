# FSE Boilerplate

A modern, modular, and simple Full Site Editing (FSE) WordPress theme.  
Designed as a development base for building custom FSE themes quickly and efficiently.

## 🎯 Objectives

- Provide a solid foundation for starting a Full Site Editing theme.
- Adopt modern WordPress development best practices.
- Integrate a modern build workflow (JS, CSS, PHP).
- Ensure compliance with WordPress coding standards (PHP, JS, CSS).
- Facilitate scalability and customization for developers.

> ℹ️ **Note**  
> This theme is not intended to provide a block development setup.  
> As per [WordPress Block Editor Handbook](https://developer.wordpress.org/block-editor/), block development should be handled via a plugin.  
> This approach also aligns with React’s component-based philosophy, which Gutenberg itself builds upon.

## ✨ Features

- **FSE architecture**: Includes `theme.json`, `templates/`, `parts/`, and `patterns/`.
- **Local font integration**: Fonts are loaded via `theme.json` without external queries.
- **Internationalization ready**: French translation included in the `languages` folder.
- **Modern build tools**: JS/SCSS compilation with Webpack via `@wordpress/scripts`.
- **Automated code quality tools**:
  - PHP: [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer/) with [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards).
  - JS/CSS: ESLint via `@wordpress/scripts` and [Prettier](https://prettier.io/).
- **Developer-friendly configuration**:
  - `.editorconfig` for consistent coding styles.
  - `.prettierrc` for Prettier configuration.
  - `phpcs.xml.dist` for PHP_CodeSniffer rules.

## 🚀 Prerequisites

To use this boilerplate, ensure you have the following installed:

- **PHP** v8.1+.
- **WordPress** v6.4+.
- **Node.js** v18+.
- **npm/yarn** Node package manager.
- **Composer** For managing PHP dependencies.

## 🛠 Setup, Build, and Lint

### Setup

Clone the repository and install dependencies:

```bash
git clone https://github.com/NicoMarcico/FSE-boilerplate.git
cd FSE-boilerplate
npm install         # Install node dependencies
composer install    # Install PHP dependencies
```

### Build

The build process uses the `@wordpress/scripts` package.  
Under the hood, Webpack is configured with Babel and ESLint.  
A custom configuration file, `webpack.config.js`, extends core functionalities.

```bash
npm run start   # Watch for changes to SCSS and JS, automatically rebuild them
npm run build   # Build CSS and JS files in the build folder for deployment
```

### Lint

FSE Boilerplate follows WordPress coding standards. Use the following commands to check and fix code:

```bash
composer phpcs  # Check the code against coding standards
composer phpcbf # Automatically fix fixable errors
```

For JS and SCSS files, the WordPress Prettier configuration is included via the `.prettierrc` file.

## 📁 Project Structure

```bash
├── assets/               # Theme assets
    ├── fonts/            # Local fonts
    ├── images/           # Theme images
├── build/                # Compiled files after build
    ├── css/
    ├── js/
├── inc/                  # Includes and functions
    ├── enqueue.php       # Enqueue scripts and styles
    ├── setup.php         # Theme setup
├── languages/            # Translations
├── parts/                # Template parts for FSE
├── patterns/             # Block patterns in PHP for FSE
├── src/                  # Source files
    ├── js/
    ├── scss/
├── templates/            # Templates for FSE
```

## 📚 License

This project is licensed under the **GPLv2 or later** license.  
You are free to use, modify, and distribute it under the same license.

## 🙏 Credits & Inspirations

This project is inspired and informed by the following resources:

- [WordPress Developer Handbook](https://developer.wordpress.org/) — Official documentation for WordPress theme and block development.
- [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) — Simplifies configuration of modern build tools for WordPress development.
- [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards) — PHP_CodeSniffer ruleset for WordPress code quality.
- [Carolina Nymark – Full Site Editing](https://fullsiteediting.com/) — A fantastic learning resource by a WordPress core contributor, with clear and practical tutorials on FSE theme building.
