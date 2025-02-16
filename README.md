# Sigma Security Settings wp_config

This configuration enhances WordPress security by disabling debugging errors, restricting file modifications, and limiting login attempts to prevent brute-force attacks.

## Features

- **Disable Debugging:** Prevents error messages from displaying, reducing information leaks.
- **Disable File Editing & Modifications:** Restricts access to theme and plugin file editors from the admin panel.
- **Limit Login Attempts:** Protects against brute-force attacks by restricting the number of login attempts.

## Configuration Details

### 1. Disable Debugging Errors
To prevent PHP errors from being displayed, reducing potential security risks:
```php
@ini_set('display_errors', 0);
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
```

### 2. Disable File Editing & Modifications
Restricts the ability to edit theme and plugin files from the WordPress admin panel:
```php
define('DISALLOW_FILE_EDIT', true);
```

### 3. Protect Against Brute-Force Attacks
Limits the number of failed login attempts and implements a cooldown period:
```php
define('WP_LOGIN_ATTEMPTS', 5);
define('WP_LOGIN_BLOCK_TIME', 15); // in minutes
```

## Usage
Add these constants to your `wp-config.php` file before the `/* That's all, stop editing! Happy publishing. */` line.

## Disclaimer
These settings enhance security but should be used alongside other best practices, such as strong passwords, two-factor authentication, and security plugins.

---

*Sigma Security Settings v1.0*


