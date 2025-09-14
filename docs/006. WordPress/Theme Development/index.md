# WordPress Theme Development

## Initializing a theme

Create a theme directory inside `/wp-content/themes/$your-theme-directory`

Create `style.css` with following content.
```css
/*
Theme Name: KickStart
Author: Usman Ahmed
Author URI: https://example.com/
Description: This is a kickstarter theme.
Text Domain: kickstart
*/
```
Or if you are using SASS, then use following
```css
/*!
Theme Name: KickStart
Author: Usman Ahmed
Author URI: https://example.com/
Description: This is a kickstarter theme.
Text Domain: kickstart
*/
```
Create `index.php` and `functions.php` in the theme root directory