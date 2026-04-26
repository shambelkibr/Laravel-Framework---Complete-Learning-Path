

## 📅 DAY 2 (Ubuntu Edition): Installing PHP, Composer, and Laravel

---

### 🔧 Step 1: Update Your System


```bash
sudo apt update && sudo apt upgrade -y
```

---

### 📦 Step 2: Install PHP and Required Extensions

```bash
sudo apt install -y php php-cli php-common php-mbstring php-xml php-curl php-zip php-mysql php-sqlite3 php-bcmath
```

**Verify PHP is installed:**

```bash
php --version
```

You should see something like `PHP 8.1.x` or `PHP 8.2.x` or `PHP 8.3.x`

---

### 📦 Step 3: Install Composer (The Dependency Manager)

```bash
cd ~
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

**Verify Composer is installed:**

```bash
composer --version
```

You should see `Composer version 2.x.x`

---

### 📦 Step 4: Install Laravel Installer

```bash
composer global require laravel/installer
```

---

### 🔧 Step 5: Add Composer's Global Bin to Your PATH

This allows you to run `laravel` command from anywhere.

```bash
echo 'export PATH="$HOME/.config/composer/vendor/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc
```

**Verify Laravel installer works:**

```bash
laravel --version
```

You should see `Laravel Installer x.x.x`

---

### 🚀 Step 6: Create Your First Laravel Project

Choose a folder where you want to keep your projects. I recommend `Desktop` or `Documents` or `Projects` folder.

```bash
cd ~/Desktop
laravel new my-first-app
```

This will take 1-2 minutes. It will ask:
> "Would you like to install a starter kit?"  
Type: **none** (just press Enter)

> "Which testing framework do you prefer?"  
Type: **pest** or **phpunit** (either is fine, press Enter)

---

### 🏃 Step 7: Run Your Laravel Application

```bash
cd my-first-app
php artisan serve
```

You will see:
```
Starting Laravel development server: http://127.0.0.1:8000
```

---

### 🌐 Step 8: See It in Your Browser

Open Firefox or Chrome (on your Ubuntu machine) and go to:

```
http://127.0.0.1:8000
```

You should see the **Laravel welcome page** (white background with "Laravel" text and logo).

---

###  Success Checklist

- [ ] `php --version` shows PHP 8.1+
- [ ] `composer --version` shows Composer
- [ ] `laravel --version` shows Laravel Installer
- [ ] `php artisan serve` runs without errors
- [ ] Browser shows Laravel welcome page at `http://127.0.0.1:8000`

---
