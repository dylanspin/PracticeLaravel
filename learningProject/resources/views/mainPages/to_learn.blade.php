{{-- 1. Setup & Basics (Foundations — must-know)
 What is Laravel? (MVC Framework Overview)

 Installing Laravel via Composer

 Understanding the routes/web.php file

 Basic Routing (Route::get, Route::post)

 Creating and using Controllers

 Views with Blade templating engine

 Passing data from controller to view

 Layouts and Blade components (@yield, @section, @include)

 Laravel Directory Structure (app/, resources/, routes/, etc.)

 Environment files (.env)

 Debugging with dd(), dump(), and Laravel Debugbar

2. Working with the Database (CRUD & Eloquent ORM)
 Connecting Laravel to a database via .env

 Creating and running migrations

 Creating models

 Eloquent ORM basics (e.g., Model::all(), find(), create())

 Defining relationships (one-to-many, many-to-many, etc.)

 Using factories and seeders for dummy data

 Query Builder vs Eloquent

 Pagination (paginate(), links())

3. Forms & Validation
 Creating forms in Blade (@csrf, method="POST")

 Validating form requests (inline and FormRequest classes)

 Displaying validation errors

 Old input with old() helper

 File uploads (images, etc.)

4. Authentication & Authorization
 Laravel Breeze (lightweight auth scaffolding)

 Laravel UI (if using Bootstrap/jQuery)

 Laravel Jetstream (if using Livewire/Inertia)

 Login, registration, logout, password reset

 auth() helper and Auth::check()

 Middleware (auth, guest, admin)

 User roles and permissions (Spatie package)

 Authorization via Gates and Policies

5. Advanced Blade & Components
 Custom Blade components (<x-component />)

 Slots and named slots

 Blade directives (@if, @foreach, @can, @auth, etc.)

 Reusable layouts and partials

 Conditionals and loops in Blade

6. Laravel Tools & Helpers
 Artisan CLI basics (php artisan list)

 Tinker (php artisan tinker)

 Route list (php artisan route:list)

 Laravel helpers (e.g., now(), asset(), url(), collect())

 Notifications and mail (Mail::to()->send())

 Sending emails via Markdown templates

7. API Development
 Creating API routes (routes/api.php)

 Resource controllers (php artisan make:controller --api)

 API Resources (transforming JSON responses)

 API authentication (Laravel Sanctum)

 Rate limiting and throttling

 Testing your API with Postman

8. Frontend Integration
 Using Laravel Mix

 Compiling assets with npm run dev / npm run build

 Tailwind CSS basics

 Alpine.js for interactivity

 (Optional) Vue or React integration

 Livewire (for reactive UI without JS)

9. Project Architecture & Scaling
 Route groups and prefixes

 Controller resource routes

 Service classes (business logic abstraction)

 Repository pattern (optional advanced structure)

 Service providers

 Using custom config files

10. Testing & Debugging
 Unit tests with PHPUnit

 Feature tests (tests/Feature)

 assertSee, assertRedirect, etc.

 Laravel Debugbar (for profiling)

 Logging with Log::info(), Log::error()

11. Queues, Jobs, Events (Async)
 Using queues (php artisan queue:work)

 Creating Jobs and dispatching them

 Event listeners and broadcasting (real-time)

 Email queuing

 Notifications via database or mail

12. Security
 CSRF protection (@csrf)

 Hashing passwords (Hash::make())

 Input validation and sanitization

 Authorization (Gate, Policy)

 Middleware protection (auth, throttle, verified)

13. Tools & Ecosystem
 Laravel Telescope (debugging & introspection)

 Laravel Horizon (queue monitoring)

 Laravel Forge (deployment)

 Laravel Nova (admin panels)

 Spatie packages (roles, permissions, media library, etc.)

 Laravel Excel

 Laravel Scout (search)

14. Deployment & DevOps
 Environment configuration (.env.production)

 Laravel cache optimization (config:cache, route:cache)

 Shared hosting vs VPS

 Deploying via GitHub and Forge

 Using Envoyer (zero-downtime deployment)

How to Implement This in Your "To Learn" Page
Option A: Display it as a bullet list with checkboxes and progress bar

Option B: Store it as JSON in a database and mark items as complete

Option C: Break it into categories, with filters and priorities --}}