# Marc Trestman - Portfolio Template

A modern, responsive portfolio website built with Laravel Blade and Tailwind CSS, designed to showcase UI/UX expertise and development skills.

## 🎨 Design Features

- **Dark Modern Theme**: Professional dark color scheme with blue accents
- **Fully Responsive**: Mobile-first design that works on all devices
- **Interactive Elements**: Hover effects, smooth transitions, and modern UI components
- **Professional Layout**: Clean, organized sections with proper spacing and typography

## 📁 File Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Main layout with navigation and footer
│   └── portfolio.blade.php        # Portfolio page content
routes/
└── web.php                        # Route definitions
```

## 🚀 Quick Start

1. **Install Laravel** (if not already installed):
   ```bash
   composer create-project laravel/laravel your-project-name
   cd your-project-name
   ```

2. **Copy the template files** to your Laravel project:
   - Copy `resources/views/layouts/app.blade.php` to your project
   - Copy `resources/views/portfolio.blade.php` to your project
   - Copy `routes/web.php` content to your project's routes file

3. **Add your images** to the `public/images/` directory:
   ```
   public/images/
   ├── marc-about.jpg
   ├── marc-headshot.jpg
   ├── marc-working.jpg
   ├── marc-expertise.jpg
   ├── figma-interface.jpg
   ├── marc-personal-1.jpg
   ├── marc-personal-2.jpg
   ├── marc-personal-3.jpg
   └── marc-personal-4.jpg
   ```

4. **Start the development server**:
   ```bash
   php artisan serve
   ```

5. **Visit** `http://localhost:8000` to see your portfolio!

## 🎯 Sections Included

### 1. Navigation
- Fixed header with logo and navigation menu
- Mobile-responsive hamburger menu
- Call-to-action button

### 2. About Me Section
- Hero section with personal introduction
- Call-to-action button
- Professional photo with overlay card

### 3. Image Showcase
- Grid layout with 4 featured images
- Gradient overlays and promotional content
- Responsive design for all screen sizes

### 4. The Problems I Solve
- Feature list with blue bullet points
- 6 common client challenges
- Strategic approach description

### 5. My Expertise
- 3 service cards (Strategy & Planning, UI/UX Design, Development)
- Detailed skill breakdowns
- Professional photo with stats overlay

### 6. Technical Skills
- Progress bars for design and development skills
- Percentage-based skill ratings
- Figma interface screenshot

### 7. My Approach
- 4-step process (Discover, Define, Design, Develop)
- Numbered cards with detailed descriptions
- Hover effects and animations

### 8. Client Success Stories
- 3 client case studies
- Challenge, Solution, Result format
- Real metrics and outcomes

### 9. Why Work With Me
- 3 key value propositions
- Icon-based design
- Centered layout with descriptions

### 10. Beyond Work
- Personal interests and philosophy
- Image collage layout
- Professional yet personal tone

### 11. Call to Action
- Final conversion section
- Clear next steps
- Prominent button design

### 12. Footer
- 4-column layout
- Services, tools, and contact links
- Copyright information

## 🎨 Customization

### Colors
The template uses a custom color palette defined in the Tailwind config:
- `dark-bg`: `#0E0E0E` (Main background)
- `card-bg`: `#1A1A1A` (Card backgrounds)
- `accent-blue`: `#3B82F6` (Primary accent color)

### Typography
- Font: Inter (Google Fonts)
- Responsive text sizes using Tailwind's scale
- Proper hierarchy with different font weights

### Spacing
- Consistent spacing using Tailwind's spacing scale
- Generous padding and margins for readability
- Responsive spacing adjustments

## 📱 Responsive Design

The template is fully responsive with breakpoints:
- **Mobile**: `< 768px` (single column layouts)
- **Tablet**: `768px - 1024px` (2-3 column layouts)
- **Desktop**: `> 1024px` (full multi-column layouts)

## 🔧 Technical Features

- **Laravel Blade**: Clean, maintainable template structure
- **Tailwind CSS**: Utility-first styling with custom configuration
- **Alpine.js**: Lightweight JavaScript for interactivity
- **CDN Resources**: No build process required
- **SEO Ready**: Proper meta tags and semantic HTML

## 📝 Content Management

To update the content:
1. Edit the text directly in the Blade templates
2. Replace placeholder images with your own
3. Update personal information and statistics
4. Modify colors and styling in the Tailwind config

## 🚀 Deployment

1. **Production Setup**:
   ```bash
   composer install --optimize-autoloader --no-dev
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

2. **Environment Configuration**:
   - Set `APP_ENV=production`
   - Configure your web server (Apache/Nginx)
   - Set up SSL certificate

3. **Image Optimization**:
   - Compress images for web
   - Use appropriate formats (WebP, JPEG, PNG)
   - Implement lazy loading for better performance

## 🎯 Performance Tips

- Optimize images for web use
- Consider implementing lazy loading
- Use a CDN for static assets
- Enable browser caching
- Minify CSS and JavaScript in production

## 📞 Support

This template is designed to be easily customizable and maintainable. All code is well-commented and follows Laravel and Tailwind CSS best practices.

## 📄 License

This template is provided as-is for educational and commercial use. Feel free to modify and adapt it to your needs. 