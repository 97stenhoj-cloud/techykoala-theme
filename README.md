# TechyKoala WordPress Theme

A cozy, gradient-themed WordPress theme for the TechyKoala company website.

## Features

- 🎨 Beautiful cozy gradients inspired by the Connect app
- 📱 Fully responsive design
- ✨ Smooth animations and transitions
- 🌙 Dark mode ready styling
- 🚀 Fast and lightweight
- 🔧 Easy to customize

## Installation

### Method 1: Direct Upload to Hostinger

1. Zip the `techykoala-theme` folder
2. Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
3. Upload the zip file
4. Activate the theme

### Method 2: Via Git (Your Current Setup)

1. Place the theme folder in your repo under `wp-content/themes/`
2. Commit and push to main branch
3. Your webhook will deploy it automatically
4. Activate via WordPress admin

## Page Setup

### Homepage
- Will automatically use `index.php`
- Shows company info, mission, values

### Connect Page
1. Create a new page in WordPress called "Connect"
2. Select "Connect Page" as the page template
3. Publish the page
4. Set permalink to `/connect`

## Customization

### Colors
Edit the CSS variables in `style.css`:
```css
:root {
  --primary-purple: #c084fc;
  --primary-pink: #ec4899;
  --accent-peach: #fdba74;
  --soft-cream: #fef3c7;
}
```

### Navigation
Edit menu items in `header.php` or use WordPress Menus (Appearance → Menus)

### Footer
Edit footer content in `footer.php`

## File Structure

```
techykoala-theme/
├── style.css           # Main stylesheet with all styles
├── functions.php       # Theme functions and setup
├── index.php          # Homepage template
├── header.php         # Header with navigation
├── footer.php         # Footer section
├── page-connect.php   # Custom template for /connect page
└── README.md          # This file
```

## Support

For questions or issues, contact: hello@techykoala.com

## Credits

Created with 💜 by TechyKoala Team
