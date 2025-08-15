# Caloocan City Social Services Management System

A modern, user-friendly web application for managing social services in Caloocan City. Built with Laravel, Tailwind CSS, and designed specifically for the "Batang Kankaloo" community.

## Features

### Public Home Page
- **Welcome Banner**: "Welcome Batang Kankaloo" with modern design
- **Service Grid**: 5 clickable service categories with beautiful animations
- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI/UX**: Clean, professional interface with Caloocan City branding

### Social Services
1. **AICS** (Assistance to Individuals in Crisis Situation)
   - Emergency financial assistance
   - Medical, burial, and educational support
   - Crisis intervention services

2. **OSCA** (Office for Senior Citizens Affairs)
   - Senior Citizen ID applications
   - Social pension programs
   - Health and wellness services
   - Recreational activities

3. **PDAO** (Persons with Disability Affairs Office)
   - PWD ID applications
   - Assistive devices support
   - Skills training programs
   - Rights advocacy

4. **Solo Parent & Child Welfare**
   - Solo Parent ID applications
   - Financial assistance programs
   - Child care support services
   - Counseling and guidance

5. **Livelihood & Training Programs**
   - Vocational training courses
   - Entrepreneurship development
   - Skills enhancement programs
   - Job placement assistance

## Technology Stack

- **Backend**: PHP 8.1+, Laravel 10.x
- **Frontend**: HTML5, Tailwind CSS 3.x, JavaScript
- **Database**: MySQL (localhost:3307)
- **Build Tool**: Vite
- **Font**: Inter (Google Fonts)

## Color Palette

The system uses a custom color palette representing Caloocan City:
- **Primary Green**: #16df0c (22,223,12)
- **Secondary Green**: #6bc633 (107,198,51)
- **Accent Green**: #6fb246 (111,178,70)
- **Gold**: #ba9c1b (186,156,27)
- **Orange**: #f67501 (246,117,1)

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL (running on localhost:3307)
- Web server (Apache/Nginx) or PHP built-in server

### Step 1: Clone and Install Dependencies
```bash
# Clone the repository
git clone <repository-url>
cd socialgovserve

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

### Step 2: Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit the `.env` file with your database configuration:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=socialgovserve
DB_USERNAME=root
DB_PASSWORD=your_password
```

### Step 3: Database Setup
```bash
# Create the database
mysql -u root -p -e "CREATE DATABASE socialgovserve;"

# Run migrations (if any)
php artisan migrate
```

### Step 4: Build Assets
```bash
# Build for development
npm run dev

# Or build for production
npm run build
```

### Step 5: Start the Application
```bash
# Using PHP built-in server
php artisan serve

# Or configure your web server to point to the public directory
```

## Project Structure

```
socialgovserve/
├── app/
│   ├── Http/Controllers/
│   │   └── HomeController.php
│   └── ...
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   └── public/
│   │       ├── home.blade.php
│   │       └── services/
│   │           ├── aics.blade.php
│   │           ├── osca.blade.php
│   │           ├── pdao.blade.php
│   │           ├── solo-parent.blade.php
│   │           └── livelihood.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       ├── app.js
│       └── bootstrap.js
├── routes/
│   └── web.php
├── public/
│   └── index.php
├── tailwind.config.js
├── vite.config.js
├── composer.json
├── package.json
└── README.md
```

## Features Overview

### Modern Design
- **Responsive Layout**: Adapts to all screen sizes
- **Smooth Animations**: Hover effects and transitions
- **Accessibility**: WCAG compliant design
- **Fast Loading**: Optimized assets and lazy loading

### User Experience
- **Intuitive Navigation**: Clear menu structure
- **Visual Hierarchy**: Easy-to-scan content layout
- **Call-to-Actions**: Prominent buttons and links
- **Contact Information**: Easy access to support

### Technical Features
- **SEO Optimized**: Meta tags and structured content
- **Performance**: Optimized images and assets
- **Security**: CSRF protection and input validation
- **Maintainable**: Clean, well-documented code

## Customization

### Colors
Edit `tailwind.config.js` to modify the color palette:
```javascript
colors: {
  'caloocan': {
    'primary': '#16df0c',
    'secondary': '#6bc633',
    'accent': '#6fb246',
    'gold': '#ba9c1b',
    'orange': '#f67501',
  }
}
```

### Content
- Update service information in respective blade files
- Modify contact details in the layout file
- Customize office hours and requirements

### Styling
- Add custom CSS in `resources/css/app.css`
- Modify Tailwind classes in blade templates
- Update animations in the CSS file

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is developed for Caloocan City Social Services.

## Support

For technical support or questions:
- Email: support@caloocan.gov.ph
- Phone: (02) 8-XXX-XXXX
- Office Hours: Monday-Friday, 8:00 AM - 5:00 PM

---

**Built with ❤️ for the Batang Kankaloo community**
