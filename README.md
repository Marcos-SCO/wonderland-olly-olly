# Wonderland - Olly-Olly

A **Docker-powered WordPress development environment** built as part of a take-home challenge from Olly-Olly.

This project focuses on creating a custom frontend implementation based on a Figma design.

---

## 🔗 Preview & Design

* 🎨 **Figma Design**: [View Design](https://www.figma.com/design/eLGUwK0QU35Bf0EM5XKZyn/Landing-Page-Hero?node-id=0-1&t=BTyVvfQSh5d1rrQB-1)
* 🌐 **Live Preview**: [Visit Website](https://ollyollywonderland.infinityfreeapp.com/)

---

## 🚀 Tech Stack

* **WordPress** (Custom Theme Development)
* **PHP** (Backend)
* **Docker & Docker Compose** (Environment setup)
* **SCSS / CSS** (Styling)
* **JavaScript (Vanilla)** (UI interactions)
* **Vite** (Asset bundling)

---

## 📦 Requirements

Make sure you have the following installed:

* Docker
* Docker Compose
* Node.js & NPM
* Composer

---

## ⚙️ Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/Marcos-SCO/wonderland-olly-olly.git
cd wonderland-olly-olly
```

---

### 2. Setup environment variables

Copy the example environment file:

```bash
cp .env.example .env
```

> ⚠️ Review and adjust environment variables if needed.

---

### 3. Install dependencies

#### Install PHP dependencies (Composer)

```bash
composer install
```

#### Install frontend dependencies (NPM)

```bash
npm install
```

---

### 4. Run frontend build (Vite)

```bash
npm run dev
```

> 💡 Use `npm run build` for production assets.

---

### 5. Start Docker containers

```bash
docker compose up -d
```

---

### 6. Access the project

Once running, access WordPress in your browser:

http://localhost:8080

> ⚠️ If the port is different in your setup, check your `docker-compose.yml` file.

---

## 🧩 Features

* Multi-step contact form with custom JavaScript logic
* Responsive UI based on Figma design
* Custom WordPress theme
* Modern frontend workflow using Vite
* Modular and reusable CSS structure

---

## 🧪 Useful Commands

### Stop containers

```bash
docker compose down
```

### Rebuild containers

```bash
docker compose up -d --build
```

---

## 👤 Author

**Marcos dos Santos**  
PHP Full-Stack Developer (WordPress Specialist)

---

## 📄 License

This project is for technical evaluation purposes only.
