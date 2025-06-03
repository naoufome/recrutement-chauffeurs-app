# Driver Recruitment App

Complete web application for managing recruitment, employees, absences, interviews, and HR administration, dedicated to transportation companies or driver agencies.

---

## 🚀 Main Features
- Candidate management, job offers, interviews, and evaluations
- Employee management, absences, leaves, and leave requests
- Driving tests and associated evaluations
- Document management (documents related to candidates/employees)
- Vehicle management
- PDF report generation (offers, employees, absences, interviews, etc.)
- Employee CSV export
- Interactive dashboard with statistics and calendar (Chart.js, FullCalendar)
- Fine-grained role and permission management (Spatie Laravel Permission)

---

## 🛠️ Technical Stack
- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: TailwindCSS, Vite, Alpine.js, Chart.js, FullCalendar, Heroicons, HeadlessUI
- **PDF**: DOMPDF (barryvdh/laravel-dompdf)
- **Permissions**: Spatie Laravel Permission
- **Tests**: PHPUnit, Laravel Dusk
- **Others**: Axios, Faker, Mockery, Laravel Breeze (authentication)

---

## ⚡ Installation & Configuration

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL or SQLite database

### Steps
1. Clone the repository:
   ```bash
   git clone <repo_url>
   cd recrutement-chauffeurs-app
   ```
2. Install backend and frontend dependencies:
   ```bash
   composer install
   npm install
   ```
3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Configure the database in `.env` (MySQL or SQLite)
6. Run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```
7. Start the development server:
   ```bash
   npm run dev
   php artisan serve
   ```

---

## 📁 Project Structure
- `app/Models`: Eloquent Models (Candidate, Employee, Offer, etc.)
- `app/Http/Controllers`: Business Controllers (CandidateController, EmployeeController, etc.)
- `app/Http/Requests`: Form Validation
- `app/Policies`: Permission Management Policies
- `resources/views`: Blade Views (UI)
- `resources/js`: Front-end Scripts (Alpine.js, Chart.js)
- `routes/web.php`: Main Routes Definition
- `config/permission.php`: Spatie Permission Configuration
- `tests/`: Unit and E2E Tests

---

## 🔒 Security & Permissions
- Authentication via Laravel Breeze
- Dynamic roles and permissions via Spatie Laravel Permission
- `auth`, `verified`, `role:admin` middleware to protect sensitive routes
- Policies to control access to critical operations

---

## 🧪 Testing
- Run all unit and functional tests:
  ```bash
  php artisan test
  ```
- Run E2E tests with Laravel Dusk:
  ```bash
  php artisan dusk
  ```

---

## 📝 Report Generation & Export
- PDF generation (offers, employees, absences, interviews...)
- Employee CSV export
- Access via routes `/reports`, `/employees/pdf`, `/offers/pdf`, etc.

---

## 🤝 Contributing
1. Fork the project
2. Create a branch (`feature/my-feature`)
3. Commit your changes
4. Open a pull request

---

## 📄 Advanced Documentation
- See `rapport_pfe.md` for architecture choices, business and technical detailed explanations.
- Complete business and technical documentation is maintained in this file to facilitate project understanding and maintenance.

---

## 📧 Support & Contact
For any questions or bugs, open a GitHub issue or contact the project team.

---

© 2025 Driver Recruitment App. All rights reserved.
