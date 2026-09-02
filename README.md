# Harness contract fixtures

This test-only package contains sanitized executable fixtures shared by Aleph, Elwin, Titan, Logres, Funes, Menard, Kilgore, and Burdgen. It owns fixture transport and verification only. Each domain package remains responsible for interpreting and testing its own boundary section.

## Use

```php
use Sifrious\HarnessContractFixtures\Fixture;

$source = Fixture::source();
$expectedAleph = Fixture::boundary('aleph');
```

Downstream tests consume the preceding boundary from the same fixture. They do not copy expected identities, provenance, passages, assertions, or citations into package-local fixture files.

`request-lifecycle-v1` proves input → deliberation → optional Twinkle → planning → WorkKit → explicit materialization → preflight → result → historical graph lineage, including a discussion step that intentionally creates no executable work. It covers Twinkle and no-Twinkle paths, one-to-many promotion, failed materialization, multiple WorkKits, Funes replay, SHA traversal, actor/tenant separation, a repository/checkout execution context, zero-provider-call failures, and failed-verification finalization semantics.

## Verify

```bash
composer install
composer test
```

Verification checks JSON Schema conformance, raw-payload hashes, cross-boundary identity and provenance links, citation traversal, explicit incompleteness, deterministic loading, and private-path or credential-shaped values.
