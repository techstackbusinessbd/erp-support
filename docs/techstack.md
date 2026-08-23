<!--
 * @Author: khaled.a
 * @Date: 2026-08-23 17:33:43
 * @LastEditors: khaled.a
 * @LastEditTime: 2026-08-23 17:50:20
 * @FilePath: \erp-support\docs\techstack.md
 * @Description: Recommended Tech Stack
-->
Recommended Tech Stack

1. Web Application

Backend

Laravel 12
PHP 8.3+
Laravel Sanctum
Spatie Laravel Permission
Laravel Notifications
Laravel Scheduler

Frontend

Laravel Blade
Bootstrap 5
AdminLTE 4
Alpine.js
DataTables
Chart.js

এতে আলাদা React frontend লাগবে না।

2. Mobile APK

Android

Flutter
Dart
Dio → REST API communication
Riverpod → State Management
GoRouter → Navigation
Firebase Cloud Messaging → Push Notification
Image Picker / Camera → Screenshot & Photo
Secure Storage → Token storage

আমি Flutter recommend করছি কারণ একই codebase থেকে Android APK maintain করা সহজ হবে।

3. API

Laravel REST API:

/api/v1/auth/login
/api/v1/auth/logout

/api/v1/tickets
/api/v1/tickets/{id}

/api/v1/modules
/api/v1/categories
/api/v1/departments

/api/v1/tickets/{id}/comments
/api/v1/tickets/{id}/attachments
/api/v1/tickets/{id}/status

Authentication:

Laravel Sanctum + Personal Access Token

4. Database

প্রথম version:

MySQL 8 / MariaDB

কারণ আপনার free/shared hosting-এর সাথে সহজে কাজ করবে।

Production VPS-এ চাইলে:

PostgreSQL 16+

তবে একটা গুরুত্বপূর্ণ বিষয়—যদি শুরু থেকেই PostgreSQL production target করেন, তাহলে development-ও PostgreSQL-এ রাখা ভালো। Database migration কম হবে।

5. File Storage

Issue-এর সাথে screenshot/photo থাকবে।

প্রথম পর্যায়:

Laravel Storage

Production scale হলে:

MinIO / S3-compatible storage

Structure:

tickets/
2026/
08/
ERP-2026-000125/
screenshot.png
error.jpg 6. Cache / Queue

প্রথম version:

Database Queue

পরে production server:

Redis + Laravel Horizon

Queue ব্যবহার হবে:

Notification
Email
Push notification
Report generation
Background processing 7. Notification
Ticket Created
↓
IT Team Notification

Ticket Assigned
↓
Assigned Person Notification

Ticket Resolved
↓
Reporter Notification

Technology:

Firebase Cloud Messaging (FCM)

8. Authentication & Permission

Role structure:

Super Admin
│
├── System Admin
├── ERP Support Manager
├── ERP Support Engineer
├── Department User
└── Viewer

Permission:

ticket.view
ticket.create
ticket.assign
ticket.update
ticket.resolve
ticket.close
ticket.reopen
ticket.delete

report.view
report.export

user.manage
role.manage

Spatie Permission দিয়ে এগুলো manage হবে।

9. Development Tools
   VS Code / Cursor / Antigravity
   Git
   GitHub
   Postman
   Figma
   Docker
   PHPUnit / Pest
   PHPStan
   Laravel Pint

Testing:

Pest PHP

Code quality:

Laravel Pint + PHPStan

Complete Architecture
┌─────────────────────┐
│ Flutter APK │
│ │
│ Employee / User │
└──────────┬──────────┘
│
HTTPS / REST
│
▼
┌─────────────────────┐
│ Laravel 12 │
│ │
│ REST API │
│ Business Logic │
│ Authentication │
│ Permission │
│ Ticket Engine │
└──────────┬──────────┘
│
┌────────────────┼────────────────┐
▼ ▼ ▼
┌──────────┐ ┌──────────┐ ┌──────────┐
│ Database │ │ Storage │ │ Queue │
│ MySQL │ │ Storage │ │ Redis\* │
└──────────┘ └──────────┘ └──────────┘

                    ┌─────────────────────┐
                    │ Laravel Blade Web   │
                    │                     │
                    │ IT Support          │
                    │ Dashboard           │
                    │ Ticket Management   │
                    │ Reports             │
                    └─────────────────────┘

- Redis in production phase
  Final Stack
  Layer Technology
  Backend Laravel 12
  Language PHP 8.3+
  Web UI Blade
  CSS/UI Bootstrap 5 + AdminLTE 4
  JS Alpine.js
  Tables DataTables
  Charts Chart.js
  Mobile Flutter + Dart
  API Laravel REST API
  Auth Sanctum
  Permission Spatie Permission
  Database MySQL 8 initially
  File Storage Laravel Storage
  Notification Firebase FCM
  Queue Database Queue → Redis
  Cache Redis later
  Queue Manager Horizon later
  Testing Pest
  Code Quality Pint + PHPStan
  Version Control Git + GitHub
  Design Figma
  Environment Docker (Local & Production)
  Deployment VPS Production with Docker Compose
