# Owned diff

## dep: opis/json-schema — 2026-08-28, MME-1367

SEAM: borrowed — serviced by the Opis maintainers; transitive: 2 packages.

PAYS WHEN: the package's one canonical JSON fixture is mechanically validated against JSON Schema Draft 2020-12 instead of relying on duplicated hand-written structural assertions.

CHARGES WHEN: schema-library APIs change, the maintainers stop publishing compatible releases, or removal requires replacing one validation call and retaining the referential-integrity verifier.

TRIGGER: MME-1367 requires executable schema validation for one cross-package fixture. PHP and Composer do not provide a JSON Schema validator.

Signals: release 2.6.0 published 2025-10-17; repository active in 2026, not archived, 18 listed contributors, and 15 open issues at review time.
