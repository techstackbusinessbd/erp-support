# 📊 Project Working Status (ERP Support)

এখানে প্রজেক্টের বর্তমান অগ্রগতি, সম্পন্ন হওয়া কাজ এবং আগামী কাজের তালিকা দেওয়া হলো।

## 🟢 Phase 1: Foundation & Setup (Completed)
- [x] Laravel প্রজেক্ট সেটআপ এবং `.env` কনফিগারেশন (PostgreSQL, Redis)।
- [x] **API Authentication:** Laravel Sanctum ইন্সটলেশন এবং AuthController (Login/Logout) তৈরি।
- [x] **Roles & Permissions:** Spatie প্যাকেজ ইন্সটলেশন এবং `Admin` ও `User` রোলের জন্য Seeder তৈরি।
- [x] **Deployment Ready:** Render.com এর জন্য `Dockerfile`, `render.yaml` এবং `docker-entrypoint.sh` তৈরি।
- [x] **Git Workflow:** `development` ব্রাঞ্চ তৈরি এবং সরাসরি প্রোডাকশনে পুশ না করার রুলস অ্যাড করা।

## 🟡 Phase 2: Core Development (In Progress / Pending)
- [x] প্রজেক্টের কোর রিকোয়ারমেন্টস: ডাটাবেস ডিজাইন আপডেট (ইউজার, রোল এবং টোকেনের জন্য UUID ব্যবহার)।
- [x] User Management (ইউজার তৈরি, এডিট, ডিলিট এবং রোল অ্যাসাইন করা)।
- [ ] User Profile API।
- [ ] (ERP Modules to be defined)

## 🔴 Phase 3: Testing & Deployment (Pending)
- [ ] API গুলোর টেস্টিং করা (Postman/Feature tests)।
- [ ] ইউজার ফাইনাল অ্যাপ্রুভাল দিলে কোড `development` থেকে `main` (Production) ব্রাঞ্চে পুশ করা।
- [ ] Render বা লাইভ সার্ভারে ডেপ্লয়মেন্ট নিশ্চিত করা।
