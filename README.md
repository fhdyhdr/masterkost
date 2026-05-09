# MasterKost

MasterKost is a web-based boarding house management system built using CodeIgniter 3 (CI3).
This application helps boarding house owners manage rooms, tenants, payments, and rental data efficiently through a simple and user-friendly interface.

---

## Features

* Boarding house room management
* payment management
* Room availability status
* Admin dashboard
* Responsive web interface
* MySQL database integration

---

## Technologies Used

* PHP
* CodeIgniter 3
* MySQL
* JavaScript
* HTML & CSS

---

## Installation Guide

### 1. Clone Repository

```bash
git clone https://github.com/fhdyhdr/masterkost.git
```

### 2. Move Project to Server Directory

Example for XAMPP:

```txt
htdocs/masterkost
```

### 3. Import Database

1. Open phpMyAdmin
2. Create database:

```txt
masterkost
```

3. Import the SQL file included in the repository.

### 4. Configure Base URL

Open:

```txt
application/config/config.php
```

Configure:

```php
$config['base_url'] = 'http://localhost:8080/masterkost/';
```

### 5. Configure Database

Open:

```txt
application/config/database.php
```

Adjust database configuration according to your local server.

### 6. Run the Server

Start:

* Apache
* MySQL

Then open:

```txt
http://localhost:8080/masterkost/
```

---

## Author

Johan Tri Asmara
