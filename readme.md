# Drago Project Backend

The administration module of Drago Project: the `Backend` presenters under `/admin`, a basic layout, the
dashboard page and the `admin.js`/`admin.scss` entry point. Feature packages add their pages to it.

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

[Project Tools](https://github.com/drago-ex/project-tools) copies the files of the package into the project,
where you adapt them.

## Usage

The route `[<lang>/]admin/<presenter>/<action>` is added by `Backend/8.conf.neon`; the dashboard is
`:Backend:Admin:default`. Presenters of the module extend `App\Presentation\Backend\BackendPresenter`.

For the administration layout with a sidebar menu, sign-in and the user menu, add
[Backend UI](https://github.com/drago-ex/project-backend-ui).

## Permissions

Every presenter is checked by the ACL. The rules are in `Backend/Admin/acl.neon`: the resource `Backend:Admin`,
for the administrator only; a guest is sent to the sign-in page of
[Project Auth](https://github.com/drago-ex/project-auth).

The same file describes the privileges (`permissionLabels`) for the permissions page of [Project Permission](https://github.com/drago-ex/project-permission).
