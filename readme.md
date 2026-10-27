# Drago Project backend module

Preconfigured backend module for Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-backend.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-backend)
[![Tests](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- Nette Framework
- Drago Project core packages

## Installation

```bash
composer require drago-ex/project-backend
```

## Files copied into the project

The files are copied into the project by [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
as set in `extra.drago-tools` of this package's `composer.json`.

## Access

The module itself has no sign-in check, so `/admin` is open until access control is added: the
`RequireLogged` trait of [drago-ex/project-auth](https://github.com/drago-ex/project-auth) in `BackendPresenter`,
or [drago-ex/project-backend-ui](https://github.com/drago-ex/project-backend-ui), which replaces the presenter
with a signed-in administration.

---

## Optional add-ons

The package works without them. Set them up by hand as described below when the project needs them.

### Permission provider

With [drago-ex/permission](https://github.com/drago-ex/permission), the access rules from [`bin/create-backend-permission`](bin/create-backend-permission)
are generated into the project by:

```bash
php vendor/bin/drago-commands
```
