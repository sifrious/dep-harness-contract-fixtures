# Harness contract fixtures

This test-only package contains one sanitized executable fixture shared by Aleph, Funes, Menard, Kilgore, and Burdgeon. It owns fixture transport and verification only. Each domain package remains responsible for interpreting and testing its own boundary section.

## Use

```php
use Sifrious\HarnessContractFixtures\Fixture;

$source = Fixture::source();
$expectedAleph = Fixture::boundary('aleph');
```

Downstream tests consume the preceding boundary from the same fixture. They do not copy expected identities, provenance, passages, assertions, or citations into package-local fixture files.

## Verify

```bash
composer install
composer test
```

Verification checks JSON Schema conformance, raw-payload hashes, cross-boundary identity and provenance links, citation traversal, explicit incompleteness, deterministic loading, and private-path or credential-shaped values.
