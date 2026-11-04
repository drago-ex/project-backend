# Drago Project backend module

Preconfigured backend module for Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-backend.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-backend)
[![Tests](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml)

## Requirements

- PHP >= 8.3, < 9
- [Drago Project](https://github.com/drago-ex/project)

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

## Access rules

The access rules are in `app/Presentation/Backend/Admin/acl.neon`: the resource `Backend:Admin`, for the administrator only.
[drago-ex/permission](https://github.com/drago-ex/permission) merges them with its base roles, in which the administrator is allowed everything.
