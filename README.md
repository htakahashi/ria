# Laravel Optimizations
- php artisan optimize (creates compiled file of common classes to reduce the number of files)
- php artisan config:cache (combines config files into one for faster loading)
- php artisan route:cache (creates route cache file for faster loading)
- If models were being used, use Eager Loading with Eloquent load data
- Optimize images