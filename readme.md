<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Installation

composer install
php artisan migrate

php artisan passport:install

php artisan db:seed --class=UsersTableSeeder

//create password grant client

php artisan passport:client --password

//remember client id and client secret for future requests

//login request change client id and client secret to yourse

curl -X POST \
  http://notes.loc/oauth/token \
  -H 'cache-control: no-cache' \
  -H 'content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW' \
  -H 'postman-token: ba49c0cc-fde9-5f76-7f47-186c1632bc84' \
  -F grant_type=password \
  -F client_id=3 \
  -F client_secret=kll1pXQIC45BisOdRHHVxs2Fyz3jRf4FUEFAv0Mq \
  -F username=test@gmail.com \
  -F password=secretsecret \
  -F 'scope=*'
  
  
  
  //create note
  
  curl -X POST \
    http://notes.loc/api/notes \
    -H 'accept: application/json' \
    -H 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiZDM4ZWUxM2IzOTkwZDQ2ZjFmOGIzOWU4MmZiMzNmYTM1MjlkMzI4Yjk2ZTRkYTc5ZjIyN2Q4YTQ2M2UyZWFkODBlY2E0ZDUxMTJlNDg2In0.eyJhdWQiOiIxIiwianRpIjoiYWJkMzhlZTEzYjM5OTBkNDZmMWY4YjM5ZTgyZmIzM2ZhMzUyOWQzMjhiOTZlNGRhNzlmMjI3ZDhhNDYzZTJlYWQ4MGVjYTRkNTExMmU0ODYiLCJpYXQiOjE1MjMzODM4ODUsIm5iZiI6MTUyMzM4Mzg4NSwiZXhwIjoxNTU0OTE5ODg1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.jXgMWWNq8DZ2VDqQcH--GIwh6ISycIu2tSPOpm3uEeTxkT_QlHfj1RNMpPUxN86IKa6Equn-IwtG70IVML1lo7-b5UCCk420aWS5SFxCD_qevOURk50wrYOJqxgW-BXVUCOwHf__T3AeZ_nY86MLRp9816XRY29wv519yJQXA2K57x3iRKZxlyzSXVni-sd7ZH0WcVQbqWBf-Zmepkh9x-gpVIN1bkGmxnNEuyFPB3CuE6R1HeUoRKUZ_m7x_Vi6IdiLKtEZ-FjcpJKt2nV2N4nqa0_A1L4V-Xy1JLkVW7U96eGaDWVxCBDwpksdmKzVB1FYUwYQkY1fMj_B_kwc9vXmcVm92HFCMqXePM5qWJOwze23hHFYTOZ0gP7K01_MFI5Ibb4iNoLcAwtxMpxTycJTfi763W06MpFID4ILcj2LRD09sRB_upIEUV5OeaKSND12F5q0Qpw0vWxbI2XIU7ksodymFpdCHcTl52wEi8M0rTizwiM5NGltBPSgK_e1UWE-Kzm_PnPxdv-jNnNWAhBW-03B_HNURU0UP8p6a_oB3S1-W2TyLxC9D20XEm5hby7VHGyJptbQP-lYG9sMOgl4h_RZPLZtpLuC509XLjGR_SAL-YX5ZuQhT8N_nmEQ4_N8empTE6uMUhpXv7BuQv9-R3-jpvtdb6OzuQ7Xxso' \
    -H 'cache-control: no-cache' \
    -H 'content-type: application/x-www-form-urlencoded' \
    -H 'postman-token: 5597bd28-33e3-5c91-b095-0085ecb6ba03' \
    -d 'title=sdasd&note=asdsadasdadasdasdasdasdasd%20asd%20asdas%20da%20asd%20asd%20asdasd%20as%20dasd%20asd%20'
    
    //delete note
    
    curl -X DELETE \
      http://notes.loc/api/notes/1 \
      -H 'accept: application/json' \
      -H 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiZDM4ZWUxM2IzOTkwZDQ2ZjFmOGIzOWU4MmZiMzNmYTM1MjlkMzI4Yjk2ZTRkYTc5ZjIyN2Q4YTQ2M2UyZWFkODBlY2E0ZDUxMTJlNDg2In0.eyJhdWQiOiIxIiwianRpIjoiYWJkMzhlZTEzYjM5OTBkNDZmMWY4YjM5ZTgyZmIzM2ZhMzUyOWQzMjhiOTZlNGRhNzlmMjI3ZDhhNDYzZTJlYWQ4MGVjYTRkNTExMmU0ODYiLCJpYXQiOjE1MjMzODM4ODUsIm5iZiI6MTUyMzM4Mzg4NSwiZXhwIjoxNTU0OTE5ODg1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.jXgMWWNq8DZ2VDqQcH--GIwh6ISycIu2tSPOpm3uEeTxkT_QlHfj1RNMpPUxN86IKa6Equn-IwtG70IVML1lo7-b5UCCk420aWS5SFxCD_qevOURk50wrYOJqxgW-BXVUCOwHf__T3AeZ_nY86MLRp9816XRY29wv519yJQXA2K57x3iRKZxlyzSXVni-sd7ZH0WcVQbqWBf-Zmepkh9x-gpVIN1bkGmxnNEuyFPB3CuE6R1HeUoRKUZ_m7x_Vi6IdiLKtEZ-FjcpJKt2nV2N4nqa0_A1L4V-Xy1JLkVW7U96eGaDWVxCBDwpksdmKzVB1FYUwYQkY1fMj_B_kwc9vXmcVm92HFCMqXePM5qWJOwze23hHFYTOZ0gP7K01_MFI5Ibb4iNoLcAwtxMpxTycJTfi763W06MpFID4ILcj2LRD09sRB_upIEUV5OeaKSND12F5q0Qpw0vWxbI2XIU7ksodymFpdCHcTl52wEi8M0rTizwiM5NGltBPSgK_e1UWE-Kzm_PnPxdv-jNnNWAhBW-03B_HNURU0UP8p6a_oB3S1-W2TyLxC9D20XEm5hby7VHGyJptbQP-lYG9sMOgl4h_RZPLZtpLuC509XLjGR_SAL-YX5ZuQhT8N_nmEQ4_N8empTE6uMUhpXv7BuQv9-R3-jpvtdb6OzuQ7Xxso' \
      -H 'cache-control: no-cache' \
      -H 'content-type: application/x-www-form-urlencoded' \
      -H 'postman-token: ab5cbbcd-1aa9-5ce7-3e21-f8fdc225c437' \
      -d 'title=sdasd&note=asdsadasdadasdasdasdasdasd%20asd%20asdas%20da%20asd%20asd%20asdasd%20as%20dasd%20asd%20'
      
      //get All notes
      
      curl -X GET \
        http://notes.loc/api/notes \
        -H 'accept: application/json' \
        -H 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiZDM4ZWUxM2IzOTkwZDQ2ZjFmOGIzOWU4MmZiMzNmYTM1MjlkMzI4Yjk2ZTRkYTc5ZjIyN2Q4YTQ2M2UyZWFkODBlY2E0ZDUxMTJlNDg2In0.eyJhdWQiOiIxIiwianRpIjoiYWJkMzhlZTEzYjM5OTBkNDZmMWY4YjM5ZTgyZmIzM2ZhMzUyOWQzMjhiOTZlNGRhNzlmMjI3ZDhhNDYzZTJlYWQ4MGVjYTRkNTExMmU0ODYiLCJpYXQiOjE1MjMzODM4ODUsIm5iZiI6MTUyMzM4Mzg4NSwiZXhwIjoxNTU0OTE5ODg1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.jXgMWWNq8DZ2VDqQcH--GIwh6ISycIu2tSPOpm3uEeTxkT_QlHfj1RNMpPUxN86IKa6Equn-IwtG70IVML1lo7-b5UCCk420aWS5SFxCD_qevOURk50wrYOJqxgW-BXVUCOwHf__T3AeZ_nY86MLRp9816XRY29wv519yJQXA2K57x3iRKZxlyzSXVni-sd7ZH0WcVQbqWBf-Zmepkh9x-gpVIN1bkGmxnNEuyFPB3CuE6R1HeUoRKUZ_m7x_Vi6IdiLKtEZ-FjcpJKt2nV2N4nqa0_A1L4V-Xy1JLkVW7U96eGaDWVxCBDwpksdmKzVB1FYUwYQkY1fMj_B_kwc9vXmcVm92HFCMqXePM5qWJOwze23hHFYTOZ0gP7K01_MFI5Ibb4iNoLcAwtxMpxTycJTfi763W06MpFID4ILcj2LRD09sRB_upIEUV5OeaKSND12F5q0Qpw0vWxbI2XIU7ksodymFpdCHcTl52wEi8M0rTizwiM5NGltBPSgK_e1UWE-Kzm_PnPxdv-jNnNWAhBW-03B_HNURU0UP8p6a_oB3S1-W2TyLxC9D20XEm5hby7VHGyJptbQP-lYG9sMOgl4h_RZPLZtpLuC509XLjGR_SAL-YX5ZuQhT8N_nmEQ4_N8empTE6uMUhpXv7BuQv9-R3-jpvtdb6OzuQ7Xxso' \
        -H 'cache-control: no-cache' \
        -H 'postman-token: 0bb9d6e0-79b0-39d2-048d-58706efacf0d'
        
        //edit note
        
        curl -X PUT \
          http://notes.loc/api/notes/2 \
          -H 'accept: application/json' \
          -H 'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFiZDM4ZWUxM2IzOTkwZDQ2ZjFmOGIzOWU4MmZiMzNmYTM1MjlkMzI4Yjk2ZTRkYTc5ZjIyN2Q4YTQ2M2UyZWFkODBlY2E0ZDUxMTJlNDg2In0.eyJhdWQiOiIxIiwianRpIjoiYWJkMzhlZTEzYjM5OTBkNDZmMWY4YjM5ZTgyZmIzM2ZhMzUyOWQzMjhiOTZlNGRhNzlmMjI3ZDhhNDYzZTJlYWQ4MGVjYTRkNTExMmU0ODYiLCJpYXQiOjE1MjMzODM4ODUsIm5iZiI6MTUyMzM4Mzg4NSwiZXhwIjoxNTU0OTE5ODg1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.jXgMWWNq8DZ2VDqQcH--GIwh6ISycIu2tSPOpm3uEeTxkT_QlHfj1RNMpPUxN86IKa6Equn-IwtG70IVML1lo7-b5UCCk420aWS5SFxCD_qevOURk50wrYOJqxgW-BXVUCOwHf__T3AeZ_nY86MLRp9816XRY29wv519yJQXA2K57x3iRKZxlyzSXVni-sd7ZH0WcVQbqWBf-Zmepkh9x-gpVIN1bkGmxnNEuyFPB3CuE6R1HeUoRKUZ_m7x_Vi6IdiLKtEZ-FjcpJKt2nV2N4nqa0_A1L4V-Xy1JLkVW7U96eGaDWVxCBDwpksdmKzVB1FYUwYQkY1fMj_B_kwc9vXmcVm92HFCMqXePM5qWJOwze23hHFYTOZ0gP7K01_MFI5Ibb4iNoLcAwtxMpxTycJTfi763W06MpFID4ILcj2LRD09sRB_upIEUV5OeaKSND12F5q0Qpw0vWxbI2XIU7ksodymFpdCHcTl52wEi8M0rTizwiM5NGltBPSgK_e1UWE-Kzm_PnPxdv-jNnNWAhBW-03B_HNURU0UP8p6a_oB3S1-W2TyLxC9D20XEm5hby7VHGyJptbQP-lYG9sMOgl4h_RZPLZtpLuC509XLjGR_SAL-YX5ZuQhT8N_nmEQ4_N8empTE6uMUhpXv7BuQv9-R3-jpvtdb6OzuQ7Xxso' \
          -H 'cache-control: no-cache' \
          -H 'content-type: application/x-www-form-urlencoded' \
          -H 'postman-token: 4696c3d7-8b81-0483-163f-a2ac341fb25b' \
          -H 'title: bajajajjajaja' \
          -d 'title=sdasd&note=asdsadasdadasdasdasdasdasd%20asd%20asdas%20da%20asd%20asd%20asdasd%20as%20dasd%20asd%20'