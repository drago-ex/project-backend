# Drago Project backend module

Preconfigured backend module for Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-backend.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-backend)
[![Coding Style](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Drago Project core packages

## Installation

```bash
composer require drago-ex/project-backend
```

## Project files

File copying is handled automatically by [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
which must be installed in your project. Without it, copy the files manually according to the `copy` section
in this package's `composer.json`. To skip this package, set `"skip": true` under
`extra.drago-tools.packages.<package-name>` in your root `composer.json`.

## Permission provider

With [drago-ex/permission](https://github.com/drago-ex/permission) installed, generate the basic access rules
of this package (registers the administration, administrators are allowed everything) together with those of the other installed packages:

```bash
php vendor/bin/create-permission --packages
```

The rules are declared in [`permission.php`](permission.php) and generated into `app/Presentation/Backend/Admin/PermissionProvider.php`.
An existing class is kept, because it belongs to the project; the command records what it did in `.drago-project/permission.json`.
