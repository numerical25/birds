<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Birds

Simple App that allows you to make api calls for birds. Data is saved as mock data for simplicity sake. There is only two items, by ID 0 and 1. See more details in the routes/api.php folder

- /api/birds/
-- Gets all Birds As Idles , Returns images of birds idles
- /api/birds/idle - Returns All birds as Idle State
- /api/birds/walk - Returns all Birds in Flight State with Images of Flight
- /api/birds/eat - Returns all birds in eating state show images of birds eating
- /api/birds/$id - Returns a paticular Bird in Idle State By Default
- /api/birds/$id/idle - Returns Bird as idle by ID
- /api/birds/$id/eat - Returns Bird as Eating With Image by ID
- /api/birds/$id/walk - Returns Bird as Flying by ID




