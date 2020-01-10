# PropertySafe Test

### Installation instructions

- Clone or copy this project to your machine
- `$ composer install` - Install dependencies
- `cp .env.example .env` - Create .env from example base
- Update `.env` to hit your local database connection. See below for specific instructions
- `$ php artisan migrate` - Run migration
- `$ php artisan serve` - Serve the app and enjoy!

### Configuring your database connection:

```
#.env
DB_HOST=127.0.0.1                       # Update your host as needed
DB_PORT=3306                            # Set port as needed
DB_DATABASE=property_safe_development   # Ensure this references the name of an empty database
DB_USERNAME=root                        # Set username and password as needed for your environment
DB_PASSWORD=
```