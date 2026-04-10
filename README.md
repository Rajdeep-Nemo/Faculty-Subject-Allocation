# Brainware University — Faculty Subject Allocation System
## Setup Guide (XAMPP)

---

## 📁 FOLDER STRUCTURE

```
brainware-faculty/
├── index.php              ← Faculty form (main page)
├── submit.php             ← Handles form submission
├── hod-dashboard.php      ← HOD panel (password protected)
├── export-csv.php         ← Export all data as CSV
├── export-pdf.php         ← Export all data as PDF
├── db.php                 ← Database config (auto-creates DB & table)
├── assets/
│   ├── style.css          ← All styles
│   ├── form.js            ← Faculty form interactivity
│   └── dashboard.js       ← HOD dashboard search
└── fpdf/
    └── fpdf.php           ← ⚠️ YOU MUST ADD THIS (see Step 3)
```

---

## 🚀 STEP-BY-STEP SETUP

### Step 1 — Copy Project to XAMPP
Copy the entire `brainware-faculty` folder into:
```
C:\xampp\htdocs\brainware-faculty\
```

### Step 2 — Start XAMPP
- Open XAMPP Control Panel
- Start **Apache**
- Start **MySQL**

### Step 3 — Install FPDF Library (for PDF export)
1. Go to: https://www.fpdf.org
2. Click **Download** → download the ZIP
3. Extract the ZIP
4. Copy `fpdf.php` into:
   ```
   C:\xampp\htdocs\brainware-faculty\fpdf\fpdf.php
   ```

### Step 4 — Open the App
Open your browser and go to:
```
http://localhost/brainware-faculty/
```

✅ The database `brainware_faculty` and table `faculty_submissions` will be
   created automatically on first load. No manual SQL needed!

---

## 🔐 HOD DASHBOARD

- URL: `http://localhost/brainware-faculty/hod-dashboard.php`
- Password: **brainware@hod**

---

## 📋 FEATURES SUMMARY

| Feature                        | Details                              |
|-------------------------------|--------------------------------------|
| Faculty Name Input            | With validation (letters only)       |
| 4 Subject Dropdowns           | Dynamic — no duplicate subjects      |
| Progress Bar                  | Shows how many subjects selected     |
| Duplicate Faculty Guard       | Won't allow same name twice          |
| HOD Login                     | Password: brainware@hod              |
| Search/Filter                 | Search by name or subject            |
| Stats Cards                   | Total, subjects covered, top subject |
| Export CSV                    | One-click download                   |
| Export PDF                    | Formatted report with university header |
| Print View                    | Clean print layout                   |
| Delete Records                | HOD can remove entries               |
| Responsive Design             | Works on mobile & desktop            |

---

## ⚙️ DATABASE CONFIG (db.php)

Default XAMPP settings — no changes needed:
```
Host:     localhost
User:     root
Password: (empty)
Database: brainware_faculty (auto-created)
```

---

## 🛠️ TROUBLESHOOTING

| Problem                  | Solution                                      |
|--------------------------|-----------------------------------------------|
| Blank page               | Check Apache & MySQL are running in XAMPP     |
| DB connection error      | Verify MySQL is started in XAMPP              |
| PDF export not working   | Make sure fpdf/fpdf.php exists (see Step 3)   |
| Styles not loading       | Check assets/ folder is inside project folder |

---

*Brainware University — Computational Sciences Department*
*Faculty Subject Allocation System — Academic Year 2025–2026*
