
# business-domain

Pure business domain models for Clutch Property Management. Contains framework-agnostic entities such as Property, Unit, Address, CompanyInfo, ContactInfo, and related value objects. Designed for Clean Architecture: zero infrastructure, no PDO, no external dependencies.

---

## Table of Contents

- [Goals](#goals)
- [What’s Included](#whats-included)
- [What’s *Not* Included](#whats-not-included)
- [Install](#install)
- [Usage](#usage)
  - [Entities](#entities)
  - [Value Objects](#value-objects)
- [Directory & Namespaces](#directory--namespaces)
- [Versioning](#versioning)
- [Contributing](#contributing)
- [License](#license)

## Goals

- Represent the **core business domain** of a property management company
- Provide **stable**, **pure**, **side‑effect‑free** domain entities
- Stay **framework‑agnostic** and **persistence‑agnostic**
- Serve as the business foundation for `storefront` and `storefront-admin`

## What’s Included

- Core business entities:
  - `Property`
  - `Unit`
  - `Address`
  - `Company`
  - `CompanyInfo`
  - `ContactInfo`
- Simple domain invariants and rules with no external I/O
- Immutable value objects where appropriate

## What’s *Not* Included

- No PDO or repository implementations
- No validation framework
- No HTTP, controllers, or framework glue
- No CMS-related classes (see `content-domain`)

## Install

```bash
composer require clutch-property-mgmt/business-domain
```

> Requires PHP 8.2+.

## Usage

### Entities

```php
<?php
use ClutchPropertyMgmt\\BusinessDomain\\Property;
use ClutchPropertyMgmt\\BusinessDomain\\Address;

$address = new Address(
    street: '123 Main St',
    city: 'Fort Collins',
    state: 'CO',
    postalCode: '80524'
);

$property = new Property(
    id: 42,
    name: 'Midtown Lofts',
    address: $address,
);
```

### Value Objects

```php
<?php
final class ContactInfo
{
    public function __construct(
        public readonly string $phone,
        public readonly string $email,
    ) {}
}
```

## Directory & Namespaces

```shell
src/
  Property.php
  Unit.php
  Address.php
  Company.php
  CompanyInfo.php
  ContactInfo.php
```

Namespace root: `ClutchPropertyMgmt\\BusinessDomain`

## Versioning

- Semantic Versioning (SemVer)
- Breaking changes only in MAJOR releases

## Contributing

1. Fork the repo and create a feature branch
2. Include tests where applicable
3. Ensure CI passes
4. Open a PR with a clear description

## License

MIT License. See `LICENSE` for details.
