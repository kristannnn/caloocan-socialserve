# Images Folder

This folder contains images for the SocialGovServe project.

## Required Images

Based on the project requirements, the following images should be added to this folder:

### 1. PDAO Logo (Persons with Disability Affairs Office)
- **Filename**: `pdao-logo.png` or `pdao-logo.jpg`
- **Description**: Circular logo with green gradient background, white wheelchair icon, and text "CALOOCAN CITY • PERSONS WITH DISABILITY AFFAIRS OFFICE"

### 2. OSCA Logo (Office for Senior Citizens Affairs)
- **Filename**: `osca-logo.png` or `osca-logo.jpg`
- **Description**: Circular logo with green outer ring, white inner circle containing orange "OSCA" acronym, text "CITY OF CALOOCAN" and "OFFICE FOR SENIOR CITIZENS AFFAIRS"

### 3. Caloocan City Banner
- **Filename**: `caloocan-banner.png` or `caloocan-banner.jpg`
- **Description**: Horizontal banner with Caloocan City logo, text "PAMAHALAANG LUNGSOD NG CALOOCAN", slogan "BATANG KANKALOO", and Bonifacio Monument

### 4. Caloocan City Seal
- **Filename**: `caloocan-seal.png` or `caloocan-seal.jpg`
- **Description**: Circular emblem with orange border, blue/red background with yellow sun and white stars, Bonifacio Monument in center, text "MAKASAYSAYANG LUNGSOD NG CALOOCAN"

## How to Add Images

1. Place the actual image files in this folder
2. Use the filenames suggested above or update the code references accordingly
3. Ensure images are optimized for web use (recommended formats: PNG, JPG, WebP)
4. Update any image paths in your Laravel views or CSS files

## Usage in Laravel

To reference these images in your Laravel views, use:

```html
<img src="{{ asset('images/filename.png') }}" alt="Description">
```

Or in CSS:

```css
background-image: url('/images/filename.png');
```
