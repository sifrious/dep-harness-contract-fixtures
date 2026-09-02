# ADR-001: Store the conversation fixture in a test-only package

**Status:** Accepted  
**Date:** 2026-08-28  
**Tickets:** MME-1367  
**Reversibility:** B  
**Store relation:** neither

## Context

Aleph, Funes, Menard, Kilgore, and Burdgen must consume one executable fixture without making a domain package depend on an application or a sibling's persistence model. Repository-local copies would drift and would make repeated expected data separate authorities. The package is justified now because MME-1367 explicitly requires a shared cross-repository contract and provider details must stop at the Aleph boundary.

## Options

### A: Test-only Composer package

Time to first contract is short, maintenance is one data package with no runtime dependency, and removal requires relocating one fixture plus changing dev dependencies.

### B: Copy the fixture into each repository

Time to first test is slightly shorter, but five copies create immediate schema drift and make the application or an arbitrary domain package the de facto authority.

## Decision

Use a test-only Composer package containing sanitized data, schemas, a deterministic loader, and cross-boundary integrity verification. The load-bearing reason is that one versioned artifact must be consumed by repositories whose production dependency graph must remain independent.

## Consequences

- Easier: schema validation, deterministic replay, provenance traversal, and fixture upgrades remain centralized.
- Harder: each consuming repository needs a development dependency and must coordinate fixture-version changes.
- Revisit trigger: the fixture package acquires runtime behavior, more than three unrelated workflows, or domain rules that cannot be assigned to one owning package.
