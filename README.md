# BLOG APP (Laravel + Next.js)

A simple blog application with:  
- **Laravel** as the backend (API + Admin BackOffice)  
- **Next.js** as the frontend (Post listing & detail page)  
- **MySQL** database  
- **CRUD interface** in the BackOffice with WYSIWYG editor  
- **Authentication** for admin access  
- **API endpoints** for frontend consumption  

---

## 🚀 Features

### Backend (Laravel)
- Admin authentication (login/logout)  
- CRUD for blog posts  
- WYSIWYG text editor for post content  
- API endpoints for:  
  - Post listing  
  - Post detail  
- Secure API authentication  

### Frontend (Next.js)
- Post listing page  
- Post detail page  
- Responsive design  
- Fetching data from Laravel API  

---

## 🛠 Tech Stack

- **Backend:** PHP 8+, Laravel 10+  
- **Frontend:** Node.js 18+, Next.js 14+  
- **Database:** MySQL / PostgreSQL  
- **Styling:** TailwindCSS / Bootstrap  
- **Server:** Nginx / Apache  

---

## 📋 Requirements

Make sure you have the following installed before proceeding:

- PHP 8.x with Composer  
- Node.js (v18+ recommended)  
- MySQL or PostgreSQL  
- NPM or Yarn  
- Git  
- Nginx / Apache (local or production server)  

---

## ⚙️ Installation

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/budiluky/blog-app.git
cd blog-app
```

### 2️⃣ Backend Setup (Laravel)

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

Edit the `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

Run migrations and seed the admin user:

```bash
php artisan migrate --seed
```

Serve the Laravel backend:

```bash
php artisan serve
```

Backend will be available at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

### 3️⃣ Frontend Setup (Next.js)

```bash
cd ../frontend
npm install
cp .env.example .env.local
```

Edit the `.env.local` file to set API URL:

```env
NEXT_PUBLIC_API_URL=http://127.0.0.1:8000/api
```

Run the Next.js development server:

```bash
npm run dev
```

Frontend will be available at: [http://localhost:3000](http://localhost:3000)

---

## 📂 Project Structure

```
simple-blog/
│
├── backend/           # Laravel Backend API & Admin Panel
│   ├── app/
│   ├── database/
│   ├── routes/
│   ├── .env
│   └── ...
│
├── frontend/          # Next.js Frontend
│   ├── pages/
│   ├── components/
│   ├── styles/
│   └── ...
│
└── README.md
```

---

## 🔑 Default Admin Login

| Email             | Password  |
|-------------------|-----------|
| admin@example.com  | password  |

---

## 📡 API Endpoints

| Method | Endpoint         | Description            |
|--------|------------------|------------------------|
| GET    | /api/posts       | Get all posts          |
| GET    | /api/posts/{id}  | Get single post        |
| POST   | /api/posts       | Create post (admin)    |
| PUT    | /api/posts/{id}  | Update post (admin)    |
| DELETE | /api/posts/{id}  | Delete post (admin)    |

---

## 🎯 Optional Features (Future Enhancements)

- Post search (backend + frontend)  
- API documentation using Swagger  
- Unit and integration testing  

---

## 📌 Evaluation Criteria

- Code quality (structure, naming conventions, modularity)  
- Complete and working functionality  
- Proper authentication for backend and API  
- Clean and responsive UI/UX design  
- Robust error handling and validation  

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 👤 Author

TUTOT BUDI LUKITO — [GitHub Profile](https://github.com/budiluky)
