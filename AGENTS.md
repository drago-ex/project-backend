# Agent Guide

`drago-ex/project-backend` (type drago-tools-resource, PHP >=8.3 <9): the bare administration module that the
feature packages put their `Backend/<X>` presenters into. The workspace rules are in `../AGENTS.md`;
dependencies are in `composer.json`.

## Layout
- `resources/app/Presentation/Backend`: `BackendPresenter` (extends `BasePresenter` of project-front, which uses
  the `Authorization` trait), `BackendRouter` (`8.conf.neon`, `[<lang=cs cs|en>/]admin/<presenter>/<action>`),
  `@layout.latte`, `Admin/` (dashboard, `acl.neon` with the resource `Backend:Admin`).
- `resources/assets/admin.js` + `admin.scss`: the entry point, copied by `copy`.
- `tests/`.

## How it works
- Access is the ACL of drago-ex/permission through the `Authorization` trait: a guest is redirected to `:Sign:in`
  with a backlink, a signed-in user without the privilege gets 403.
- project-backend-ui replaces the layout, the presenter and the `admin.*` assets with the full administration;
  project-preset replaces `admin.*` again with the assets of all its packages. Keep this package minimal.

## Commands
```bash
composer phpstan
composer tester
```
