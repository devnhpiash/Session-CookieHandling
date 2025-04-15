# Session-CookieHandling

A simple and practical PHP + Bootstrap-based project that demonstrates how to handle user sessions and cookies for login persistence — even after the browser is closed and reopened.

---

## 🚀 Features

- 🔐 **Login Page**
- 📊 **Dashboard Page**
- 🚪 **Logout Page**
- 🧠 **Session & Cookie Handling**

---

## ✅ How It Works

- **Login**: 
  - Starts a session on successful login.
  - Saves user credentials in cookies for persistent login.

- **Cookie-Based Auto Login**:
  - If the browser is closed and reopened, it checks for stored cookie data and auto-logs the user in if valid.

- **Dashboard**: 
  - Accessible only after login.
  - Displays session data.

- **Logout**:
  - Ends the session.
  - Clears cookies.

---

## 📁 Project Structure

```
Session-CookieHandling/
│
├── index.php              # Login Page
├── dashboard.php          # Dashboard Page (after login)
├── logout.php             # Logout logic
├── auth.php               # Handles login authentication
├── config.php             # DB/config (optional)
└── assets/                # Bootstrap/CSS/JS files
```

---

## 🛠️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/devnhpiash/Session-CookieHandling.git
   ```

2. Move it to your XAMPP/htdocs folder:
   ```
   E:/xampp/htdocs/2025/Session-CookieHandling/
   ```

3. Run it from your browser:
   ```
   http://localhost/2025/Session-CookieHandling/index.php
   ```

4. Default Login Credentials (hardcoded for demo):
   - **Username**: `admin@example.com`
   - **Password**: `123456`

---

## 🧰 Tools Used

- PHP
- HTML5 + CSS3
- Bootstrap 5
- JavaScript (for minor UI interactions)

---

## 📌 Notes

- This is a simple demo project; cookie handling is implemented without encryption.
- For production, always **encrypt sensitive cookie data** and use **HTTPS**.

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 🙌 Support

Feel free to star ⭐ the repo or contribute via pull requests.
