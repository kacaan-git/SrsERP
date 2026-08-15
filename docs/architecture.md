# Phase 1 Architecture and Implementation Notes

This document contains the Phase 1 architecture audit and the planned initial scaffolding for the CUSTOM BUSINESS ERP (SrsERP) project.

It mirrors the README requirements and provides the concrete artifacts that were added in the initial commit on branch feature/phase-1-init.

Summary of included artifacts
- composer.json baseline (php ^8.4, laravel ^13)
- .env.example
- .gitignore
- Initial Laravel-style migration creating core tables
- Basic Eloquent models for User, Company, Branch, Department
- Architecture notes and Phase 1 roadmap

Phase 1 deliverables (detailed)
1) Folder structure
- app/
  - Domain/
  - Models/
  - Services/
  - Actions/
  - Resources/
  - Console/
  - Notifications/
  - Providers/
- database/
  - migrations/
  - seeders/
- routes/
  - web.php
  - api.php
  - filament.php
- config/
- resources/
- tests/
- docs/

2) Database architecture
Core tables implemented in the initial migration:
- users
- companies
- branches
- departments
- roles
- permissions
- role_has_permissions
- model_has_roles
- model_has_permissions
- settings
- audit_logs
- document_sequences
- sessions

Design notes:
- All important domain tables should include company_id to implement data isolation.
- Use BIGINT unsigned autoincrement ids; add uuid columns where helpful.
- Money: DECIMAL(18,2); Quantity: DECIMAL(18,4).

3) Module architecture
- Domain-oriented layout: app/Domain/<Module> with Models, Services, Actions, Policies, Resources.
- Filament resources will live under app/Filament or Domain/<Module>/Resources.

4) Authentication
- Use Laravel auth primitives; DB-backed sessions recommended for session control.

5) RBAC
- Recommend spatie/laravel-permission for Phase 1; can replace with custom RBAC later if required.

6) Accounting, Inventory, Sales, Purchase, HR, Reporting, Audit, Security
- High-level descriptions and constraints are preserved in the main README and will be implemented in subsequent phases.

7) Roadmap
- Scaffold -> Migrations & Models -> Auth & RBAC -> Filament Resources -> Tests & CI

Next steps taken by the bot
- Created branch feature/phase-1-init
- Committed these initial scaffold files

How to review locally
1. Checkout the feature branch:
   git fetch origin
   git checkout feature/phase-1-init
2. Install dependencies:
   composer install
3. Copy env example: cp .env.example .env and fill DB credentials
4. Run migrations: php artisan migrate

