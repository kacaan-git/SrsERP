BUSINESS ERP — MASTER BUILD PROMPT

## PROJECT NAME

Build a completely new, professional, production-ready ERP system named:

CUSTOM BUSINESS ERP

This is a NEW ERP project.

Do NOT copy, import, or depend on AureusERP or any other existing ERP.

Build the system from a clean architecture.

---

# 1. TECHNOLOGY STACK

Use:

- PHP 8.4+
- Laravel 13+
- MySQL 8+
- Filament 5+
- Livewire
- Blade
- Tailwind CSS through Filament
- Composer
- Vite only where required

Development environment:

Windows
Laragon
MySQL

Production environment:

Linux
Plesk
PHP 8.4+
MySQL/MariaDB
HTTPS

The system must be deployable to shared/VPS hosting through Plesk.

---

# 2. CORE PRINCIPLE

This must be a REAL ERP.

Do not build:

- static dashboard
- fake statistics
- dummy tables
- placeholder buttons
- fake API responses
- mock transactions
- hard-coded business data

Every feature must work with the real MySQL database.

Every dashboard statistic must come from real database queries.

Every button must perform a real operation.

Every report must use real data.

---

# 3. PROJECT ARCHITECTURE

Use clean Laravel architecture.

Organize business logic using appropriate:

- Models
- Policies
- Form Requests
- Services
- Actions
- Events
- Listeners
- Jobs
- Notifications
- Resources
- Relation Managers

Do not put the entire business logic inside Filament resources.

Business logic must be reusable.

Use database transactions for important business operations.

---

# 4. MULTI-COMPANY ERP

The ERP must support multiple:

- Companies
- Branches
- Departments
- Warehouses

A user can have access to one or multiple companies/branches depending on permissions.

Business records should respect organizational boundaries.

Implement proper data isolation.

A user must never see another company's confidential information unless authorized.

---

# 5. AUTHENTICATION

Create secure authentication.

Features:

- Login
- Logout
- Password reset
- Password change
- Remember me where appropriate
- Session security
- Login activity
- Failed login tracking
- Account status
- User profile

Never store plain-text passwords.

Use Laravel's secure authentication mechanisms.

---

# 6. ROLE AND PERMISSION SYSTEM

Implement complete RBAC.

Default roles:

- Super Administrator
- Administrator
- General Manager
- Accountant
- Sales Manager
- Sales Officer
- Purchasing Manager
- Purchasing Officer
- Inventory Manager
- Warehouse Officer
- HR Manager
- HR Officer
- Cashier
- Auditor
- Employee

Permissions must be granular.

Examples:

dashboard.view

users.view
users.create
users.update
users.delete

customers.view
customers.create
customers.update

sales.view
sales.create
sales.update
sales.approve
sales.post
sales.cancel

purchases.view
purchases.create
purchases.update
purchases.approve
purchases.post
purchases.cancel

inventory.view
inventory.adjust
inventory.transfer

accounting.view
accounting.create
accounting.post
accounting.reverse

reports.view
reports.export

hr.view
payroll.view
payroll.process

Do NOT rely only on hiding UI buttons.

Permissions must be enforced server-side.

---

# 7. COMPANY MANAGEMENT

Create:

Companies

Fields:

- name
- legal_name
- registration_number
- tax_number
- phone
- email
- website
- address
- city
- country
- currency
- timezone
- logo
- status

Support:

- active
- inactive

---

# 8. BRANCH MANAGEMENT

Create branches.

Fields:

- company
- name
- code
- phone
- email
- address
- manager
- status

Every branch should belong to a company.

---

# 9. DEPARTMENT MANAGEMENT

Create:

- departments
- department code
- manager
- branch
- status

---

# 10. EMPLOYEE MANAGEMENT

Create employee management.

Fields:

- employee number
- first name
- middle name
- last name
- gender
- date of birth
- phone
- email
- address
- department
- job position
- branch
- employment date
- contract type
- salary
- status
- emergency contact

Do not expose sensitive employee information to unauthorized users.

---

# 11. CRM

Create:

Customers

Fields:

- customer number
- customer name
- customer type
- phone
- email
- address
- city
- tax number
- credit limit
- payment terms
- opening balance
- status

Customer types:

- Individual
- Business
- Government
- Organization

Also create:

- customer groups
- customer contacts
- customer addresses
- customer notes
- customer transaction history

---

# 12. SUPPLIER MANAGEMENT

Create suppliers.

Fields:

- supplier number
- supplier name
- supplier type
- phone
- email
- address
- tax number
- payment terms
- credit limit
- opening balance
- status

Create supplier transaction history.

---

# 13. PRODUCT MANAGEMENT

Create a complete product catalog.

Entities:

- Products
- Categories
- Brands
- Units
- Product variants
- Product prices
- Product taxes

Product fields:

- SKU
- barcode
- name
- description
- category
- brand
- unit
- cost price
- selling price
- minimum price
- tax
- reorder level
- status

Support:

- stockable products
- service products
- non-stock products

---

# 14. WAREHOUSE MANAGEMENT

Create:

- Warehouses
- Warehouse locations
- Warehouse managers

Each warehouse belongs to a company/branch.

---

# 15. INVENTORY

Inventory must be transaction based.

Create:

- Stock balances
- Stock movements
- Stock transfers
- Stock adjustments
- Stock counts
- Opening stock
- Damaged stock
- Expired stock

Every stock movement must record:

- product
- warehouse
- quantity
- movement type
- reference
- user
- date
- reason

Movement types:

PURCHASE
SALE
PURCHASE_RETURN
SALES_RETURN
TRANSFER_IN
TRANSFER_OUT
ADJUSTMENT
OPENING
DAMAGE
EXPIRY
OTHER

Never simply change stock without recording a movement.

---

# 16. SALES MODULE

Create complete sales workflow.

Flow:

Quotation
→ Sales Order
→ Sales Invoice
→ Payment
→ Receipt

Support:

- cash sales
- credit sales
- discounts
- taxes
- partial payments
- full payments
- customer credit
- sales returns

Invoice statuses:

- draft
- pending
- approved
- posted
- partially_paid
- paid
- overdue
- cancelled
- voided

---

# 17. PURCHASE MODULE

Flow:

Purchase Request
→ Purchase Order
→ Goods Receipt
→ Purchase Invoice
→ Supplier Payment

Support:

- cash purchase
- credit purchase
- discounts
- taxes
- partial payment
- purchase return

---

# 18. PAYMENT SYSTEM

Create unified payment management.

Payment methods:

- Cash
- Bank
- Ebirr
- eSahal
- CBE
- Other configurable methods

Do not hard-code payment methods permanently.

Allow administrators to configure payment methods.

Every payment must have:

- payment number
- date
- amount
- method
- account
- reference
- customer/supplier
- notes
- created_by
- status

---

# 19. CASH MANAGEMENT

Create:

- Cash accounts
- Cash receipts
- Cash payments
- Cash transfers
- Cash balances

Every cash transaction must have a source/reference.

---

# 20. BANK MANAGEMENT

Create:

- Bank accounts
- Deposits
- Withdrawals
- Transfers
- Bank reconciliation

Fields:

- bank name
- account name
- account number
- currency
- opening balance
- status

---

# 21. ACCOUNTING

Build a real double-entry accounting system.

Create:

- Chart of Accounts
- Account Types
- Journal Entries
- Journal Entry Lines
- General Ledger
- Trial Balance
- Profit & Loss
- Balance Sheet
- Cash Flow
- Fiscal Years
- Fiscal Periods

Account types:

- Asset
- Liability
- Equity
- Revenue
- Expense

Every posted journal must satisfy:

TOTAL DEBIT = TOTAL CREDIT

Reject unbalanced journals.

---

# 22. AUTOMATIC ACCOUNTING

Where appropriate automatically generate accounting entries.

Example:

SALE:

Debit:
Accounts Receivable / Cash

Credit:
Sales Revenue

Tax:
Tax Payable

Inventory:
Credit Inventory

Cost:
Debit Cost of Goods Sold

Do not hard-code accounts.

Create configurable accounting mappings.

---

# 23. ACCOUNTS RECEIVABLE

Create:

- customer invoices
- customer payments
- credit notes
- outstanding balances
- aging reports

Aging:

- Current
- 1–30 days
- 31–60 days
- 61–90 days
- 90+ days

---

# 24. ACCOUNTS PAYABLE

Create:

- supplier invoices
- supplier payments
- debit/credit adjustments
- outstanding balances
- aging reports

---

# 25. EXPENSE MANAGEMENT

Create:

Expense Categories

Expenses:

- expense number
- date
- category
- amount
- tax
- payment method
- account
- employee
- branch
- description
- attachment
- status

Workflow:

Draft
→ Submitted
→ Approved
→ Paid

---

# 26. HR MODULE

Create:

- Employees
- Departments
- Job Positions
- Contracts
- Attendance
- Leave
- Payroll

Leave types:

- Annual
- Sick
- Unpaid
- Maternity
- Other configurable types

---

# 27. PAYROLL

Payroll should support:

- basic salary
- allowances
- deductions
- overtime
- bonuses
- tax
- net salary
- payslip

Payroll workflow:

Draft
→ Calculated
→ Approved
→ Posted
→ Paid

Payroll records must become locked after posting.

---

# 28. TAX MANAGEMENT

Create configurable taxes.

Fields:

- tax name
- code
- rate
- type
- inclusive/exclusive
- account
- status

Do not hard-code tax percentages.

---

# 29. DOCUMENT NUMBERING

Every business document must have a unique number.

Examples:

INV-2026-000001
SO-2026-000001
PO-2026-000001
PAY-2026-000001
REC-2026-000001
JV-2026-000001
EXP-2026-000001

Use database-safe sequence generation.

Never reuse posted document numbers.

---

# 30. STATUS-BASED DATA LIFECYCLE

IMPORTANT:

Do not hard-delete important business records.

Use statuses:

- active
- inactive
- draft
- pending
- approved
- rejected
- posted
- paid
- partially_paid
- cancelled
- voided
- reversed
- closed
- terminated

Financial transactions must be immutable after posting.

Corrections must use:

- reversal
- credit note
- debit note
- correcting journal
- cancellation

Never silently edit posted financial data.

---

# 31. AUDIT TRAIL

Create a complete audit system.

Track:

- login
- logout
- create
- update
- approval
- rejection
- posting
- payment
- cancellation
- reversal
- stock adjustment
- stock transfer
- role changes
- permission changes
- configuration changes

Record:

- user
- action
- model
- record ID
- old values
- new values
- IP
- user agent
- timestamp
- reason

Audit records must be protected.

---

# 32. ATTACHMENTS

Allow documents to have attachments where useful.

Examples:

- invoices
- purchase documents
- receipts
- employee documents
- expense receipts

Use Laravel's filesystem.

Do not store arbitrary files directly in database blobs unless necessary.

---

# 33. NOTIFICATIONS

Create notifications for:

- low stock
- overdue invoices
- payment received
- purchase approval
- sales approval
- expense approval
- leave approval
- payroll completion

Use Laravel/Filament notification mechanisms.

---

# 34. DASHBOARD

Create a professional dashboard.

Widgets:

- today's sales
- monthly sales
- purchases
- expenses
- gross profit
- receivables
- payables
- cash balance
- bank balance
- inventory value
- low stock
- overdue invoices

Charts:

- sales by month
- purchases by month
- expenses by month
- profit trend
- top products
- top customers

ALL DATA MUST BE REAL.

---

# 35. REPORTING

Create professional reports.

Sales:

- daily sales
- monthly sales
- sales by customer
- sales by product
- sales by employee
- sales by branch

Purchases:

- purchases by supplier
- purchases by product
- purchases by branch

Inventory:

- stock balance
- stock movement
- stock valuation
- low stock
- stock transfer

Accounting:

- general ledger
- trial balance
- profit & loss
- balance sheet
- cash flow

Finance:

- receivables
- payables
- expenses
- cash
- bank

HR:

- employee list
- attendance
- leave
- payroll

Reports must support:

- date filters
- company
- branch
- warehouse
- customer
- supplier
- product
- status

---

# 36. SEARCH AND FILTERING

All major resources must support:

- search
- filters
- sorting
- pagination

Use database-efficient queries.

Avoid loading unnecessary records.

---

# 37. PERFORMANCE

Prevent N+1 queries.

Use:

- eager loading
- indexes
- pagination
- optimized queries

Add indexes to frequently searched fields.

---

# 38. SECURITY

Implement:

- CSRF protection
- authorization
- validation
- secure sessions
- password hashing
- rate limiting where appropriate
- secure file uploads
- permission checks
- SQL injection protection
- XSS protection

Never expose secrets.

Never expose database credentials.

Never expose production stack traces.

---

# 39. DATABASE DESIGN

Use:

- foreign keys
- indexes
- unique constraints
- timestamps
- appropriate decimal precision

Money:

DECIMAL(18,2)

Quantity:

DECIMAL(18,4)

Use transactions for:

- invoices
- payments
- purchases
- stock movements
- journal posting
- payroll

---

# 40. TESTING

Create automated tests.

Test:

Authentication

Authorization

Customers

Suppliers

Products

Inventory

Sales

Purchases

Payments

Accounting

Expenses

Payroll

Reports

Audit

Critical financial workflows must have feature tests.

---

# 41. UI REQUIREMENTS

Use Filament as the primary admin interface.

The UI must be:

- professional
- responsive
- mobile-friendly
- desktop-friendly
- clean
- consistent

Use:

- tables
- filters
- forms
- widgets
- charts
- badges
- notifications
- confirmation dialogs

Do not build a second frontend framework unless necessary.

---

# 42. SETTINGS

Create system settings.

Settings should include:

- company information
- logo
- currency
- timezone
- tax
- invoice settings
- numbering
- payment methods
- notification settings
- email settings
- fiscal year
- accounting configuration

Do not scatter configuration values throughout code.

---

# 43. SEED DATA

Create safe seeders for:

- default roles
- default permissions
- account types
- default payment methods
- default units
- basic system configuration

Do NOT create fake sales, fake purchases, fake invoices,
or fake accounting transactions unless explicitly requested.

---

# 44. INSTALLATION

The project must be installable using standard Laravel commands.

Provide:

composer install

copy .env.example .env

php artisan key:generate

php artisan migrate --seed

npm install

npm run build

php artisan storage:link

Create a professional README with installation instructions.

---

# 45. GIT

Initialize Git if appropriate.

Create meaningful commits when requested.

Never run destructive Git commands.

Never delete user work.

---

# 46. DEVELOPMENT PHASES

Build the ERP in phases.

PHASE 1
Foundation

- Laravel
- MySQL
- Filament
- Authentication
- Users
- Roles
- Permissions
- Companies
- Branches
- Settings

PHASE 2
Master Data

- Customers
- Suppliers
- Products
- Categories
- Brands
- Units
- Warehouses

PHASE 3
Inventory

- Stock
- Movements
- Transfers
- Adjustments
- Counts

PHASE 4
Sales

- Quotations
- Orders
- Invoices
- Payments
- Returns

PHASE 5
Purchases

- Requests
- Orders
- Receiving
- Invoices
- Payments
- Returns

PHASE 6
Accounting

- Chart of Accounts
- Journals
- Ledger
- AR
- AP
- Trial Balance
- P&L
- Balance Sheet
- Cash Flow

PHASE 7
Finance

- Expenses
- Cash
- Banks
- Reconciliation

PHASE 8
HR

- Employees
- Attendance
- Leave
- Payroll

PHASE 9
Reports

- Operational reports
- Financial reports
- Inventory reports
- HR reports

PHASE 10
Security & Production

- Audit
- Performance
- Testing
- Backup strategy
- Deployment

---

# 47. DEVELOPMENT RULE

Do NOT attempt to build all modules in one operation.

Build one phase at a time.

After each phase:

1. Run migrations.
2. Run tests.
3. Inspect errors.
4. Fix errors.
5. Verify permissions.
6. Verify database relationships.
7. Verify UI.
8. Verify business logic.
9. Report changes.

Then continue to the next phase.

---

# 48. FIRST TASK

Your FIRST TASK is ONLY:

Create the new Laravel project architecture and inspect the environment.

Then provide:

1. Proposed folder structure
2. Database architecture
3. ERP module architecture
4. Authentication architecture
5. RBAC architecture
6. Accounting architecture
7. Inventory architecture
8. Sales architecture
9. Purchase architecture
10. HR architecture
11. Reporting architecture
12. Audit architecture
13. Security architecture
14. Development roadmap

DO NOT implement all modules yet.

DO NOT create fake data.

DO NOT destroy anything.

DO NOT install unnecessary packages.

After presenting the architecture, wait for approval.

---

# 49. IMPORTANT

This ERP belongs to the business owner.

Design it so that:

- data remains owned by the business
- database can be backed up
- application can be moved to another server
- reports can be exported
- users can be managed
- permissions can be audited
- financial transactions can be traced
- inventory can be reconciled
- accounting can be verified

The system must be maintainable by another Laravel developer in the future.

---

# 50. FINAL PRINCIPLE

DO NOT BUILD A DEMO.

BUILD A REAL ERP.

Correctness is more important than speed.

Security is more important than convenience.

Data integrity is more important than UI.

Accounting accuracy is more important than visual effects.

Never claim a feature is complete until it 

START NOW WITH PHASE 1 ARCHITECTURE AUDIT ONLY.
