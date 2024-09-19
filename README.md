
## Features
- User Registration (with flash message)
- User Login (with remember me)
- Password Change (different url)
- Upload Profile Picture (live avatar view when uploading and deleted user's old avatar (if any))
- Make Blade Components
 
## How to install ?
```bash
composer install 
composer dump-dumpautoload
cp .env.example .env file create
php artisan migrate
php artisan key:generate
php artisan storage:link
php artisan serve 

# in a separate terminal Tab 
npm install && npm run dev
``` !
````
![Screenshot_305](https://github.com/user-attachments/assets/b46adcf9-6223-406d-9fed-f5dc7c04ae96)
