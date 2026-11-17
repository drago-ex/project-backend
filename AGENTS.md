# Agent Guide

`drago-ex/project-backend` (type drago-tools-resource, PHP >=8.3 <9): the bare administration module that the
feature packages put their `Backend/<X>` presenters into. The workspace rules are in `../AGENTS.md`;
dependencies are in `composer.json`.

## Layout
- `resources/app/Presentation/Backend`: `BackendPresenter` (extends `BasePresenter` of project-front, which uses
  the `Authorization` trait), `BackendRouter` (`8.conf.neon`, `[<lang=cs cs|en>/]admin/<presenter>/<action>`),
  `@layout.latte`, `Admin/` (dashboard, `acl.neon` with the resource `Backend:Admin`, allowed to `guest`).
- `resources/assets/admin.js` + `admin.scss`: the entry point, copied by `copy`.
- `tests/`.

## How it works
- Access is the ACL of drago-ex/permission through the `Authorization` trait: a guest without the privilege is
  redirected to `:Sign:in` with a backlink, a signed-in user without it gets 403.
- The dashboard is open to `guest`, because this package does not require project-auth: a guest sent to `:Sign:in`
  without it ends in an error 500. project-auth replaces `Admin/acl.neon` once with the administrator-only one, so
  the administration closes when the sign-in comes. Do not restrict the dashboard here.
- project-backend-ui replaces the layout, the presenter and the `admin.*` assets with the full administration;
  project-preset replaces `admin.*` again with the assets of all its packages. Keep this package minimal.

## Commands
```bash
composer phpstan
composer tester
```
