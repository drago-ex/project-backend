# Drago Project backend module

Připravený modul administrace pro Drago Project.

[![PHP version](https://badge.fury.io/ph/drago-ex%2Fproject-backend.svg)](https://badge.fury.io/ph/drago-ex%2Fproject-backend)
[![Tests](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/tests.yml)
[![Coding Style](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml/badge.svg)](https://github.com/drago-ex/project-backend/actions/workflows/coding-style.yml)

## Požadavky

- PHP >= 8.3, < 9
- [Drago Project](https://github.com/drago-ex/project)

## Instalace

```bash
composer require drago-ex/project-backend
```

## Soubory kopírované do projektu

Soubory do projektu kopíruje [drago-ex/project-tools](https://github.com/drago-ex/project-tools)
podle nastavení v `extra.drago-tools` v `composer.json` tohoto balíčku.

## Přístup

Samotný modul přihlášení nekontroluje, takže `/admin` je otevřený, dokud se nepřidá řízení přístupu:
trait `RequireLogged` z [drago-ex/project-auth](https://github.com/drago-ex/project-auth) v `BackendPresenter`,
nebo [drago-ex/project-backend-ui](https://github.com/drago-ex/project-backend-ui), který presenter nahradí
administrací pro přihlášené.

---

## Volitelné doplňky

Balíček funguje i bez nich. Pokud je projekt potřebuje, nastavte je ručně podle popisu níže.

### Provider oprávnění

S [drago-ex/permission](https://github.com/drago-ex/permission) se pravidla přístupu z [`bin/create-backend-permission`](bin/create-backend-permission)
vygenerují do projektu příkazem:

```bash
php vendor/bin/drago-commands
```
