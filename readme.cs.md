# Drago Project backend module

Připravený modul administrace pro Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-backend.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-backend)
[![Tests](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- Nette Framework
- Základní balíčky Drago Project

## Instalace

```bash
composer require drago-ex/project-backend
```

## Soubory projektu

Kopírování souborů obstarává automaticky [drago-ex/project-tools](https://github.com/drago-ex/project-tools),
který musí být v projektu nainstalovaný. Bez něj zkopírujte soubory ručně podle sekce `copy`
v `composer.json` tohoto balíčku. Pro přeskočení balíčku nastavte `"skip": true` v
`extra.drago-tools.packages.<package-name>` v kořenovém `composer.json`.

## Přístup

Samotný modul přihlášení nekontroluje, takže `/admin` je otevřený, dokud se nepřidá řízení přístupu:
trait `RequireLogged` z [drago-ex/project-auth](https://github.com/drago-ex/project-auth) v `BackendPresenter`,
nebo [drago-ex/project-backend-ui](https://github.com/drago-ex/project-backend-ui), který presenter nahradí
administrací pro přihlášené.

## Provider oprávnění

S [drago-ex/permission](https://github.com/drago-ex/permission) se pravidla přístupu z [`permission.php`](permission.php)
vygenerují do projektu příkazem:

```bash
php vendor/bin/create-permission --packages
```
