<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This API

This is a simple API for get students data and relevant results on each semester.

## Endpoints

* http://127.0.0.1:8000/api/v1/students - Outputs all the student data.
* http://127.0.0.1:8000/api/v1/students/45 - Outputs single data of a student based on the Id.
* http://127.0.0.1:8000/api/v1/firstsemresults - Outputs all the results of first semester.
* http://127.0.0.1:8000/api/v1/firstsemresults/45 - Outputs specific student's first semester results based on their Id.
* http://127.0.0.1:8000/api/v1/secondsemresults - Outputs all the results of second semester.
* http://127.0.0.1:8000/api/v1/secondsemresults/45 - Outputs specific student's second semester results based on their
  Id.
* http://127.0.0.1:8000/api/v1/thirdsemresults - Outputs all the results of third semester.
* http://127.0.0.1:8000/api/v1/thirdsemresults/45 - Outputs specific student's third semester results based on their Id.
* http://127.0.0.1:8000/api/v1/fourthsemresults - Outputs all the results of fourth semester.
* http://127.0.0.1:8000/api/v1/fourthsemresults/45 - Outputs specific student's fourth semester results based on their
  Id.

## Supported query parameters

Students can be filtered based on their GPA.

Eg - http://127.0.0.1:8000/api/v1/students?gpa[eq]=2 - This output the students who have a GPA of 2.

### Supported conditions

`'eq' = '=',` <br>
`'lt' = '<',` <br>
`'lte' = '<=',` <br>
`'gt' = '>',` <br>
`'gte' = '>='`

