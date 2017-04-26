# Tasks
* Assess and identify page load speeds and how to improve them
* Implement suggested improvements
* Get rid of basketball (Dribbble) and camera (Instagram) at the bottom of the page
* I need a way to know the location of my users

## Laravel Optimizations
- [*] php artisan optimize (creates compiled file of common classes to reduce the number of files) 
- [*] php artisan config:cache (combines config files into one for faster loading) 
- [*] php artisan route:cache (creates route cache file for faster loading) 
- [] If models were being used, use Eager Loading with Eloquent load data
- [] Optimize images

/* optimizations that I ran v1

## Results of optimization:
v1 - shaved .3 seconds off load time with no images

## Results of geolocation
I managed to get the third party package to function, but instead of calling current locations, it calls the default. I don't know if it's just because I haven't deployed the app to a live server or what the issue seems to be. I've tried to troubleshoot it, but to no avail, because it doesn't have any error indicators to let me know what is going wrong, besides that it isn't recieving the IP address for some reason.