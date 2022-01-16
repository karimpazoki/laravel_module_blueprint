<div id="top"></div>



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <h3 align="center">Laravel Module Blueprint</h3>

  <p align="center">
    A Laravel package for converting Laravel into a modular application.
  </p>
</div>

<!-- ABOUT THE PROJECT -->
## About The Project

You can convert existing Laravel apps into modular applications using "Laravel Module Blueprint". This package allows you to write modular applications with laravel and new directories will be created under `app/Modules` with the following structure:

```
  app
    |__ libraries
    |__ helpers
    |__ Core
    |__ Modules
              |__ <module 1>
              |           |__ Config
              |           |__ Console
              |           |          |__ Commands
              |           |
              |           |__ Controllers
              |           |              |__ Core
              |           |              |__ Services
              |           |__ Database
              |           |          |__ Migrations
              |           |          |__ Factories
              |           |          |__ Seeders
              |           |
              |           |__ Events
              |           |__ Exceptions
              |           |__ Facades
              |           |__ Listeners
              |           |__ Models
              |           |          |__ Entities
              |           |          |__ Domains
              |           |          |__ Observers
              |           |          |__ Repositories
              |           |
              |           |__ Providers
              |           |__ Policies
              |           |__ Resources
              |           |__ Requests
              |           |__ Routes
              |           |__ Validators
              |           |__ Views
              |
              |__ <module 2>
              |           |__ Config
              |           |__ Console
              |           |          |__ Commands
              |           |
              |           |__ Controllers
              |           |              |__ Core
              |           |              |__ Services
              |           |__ Database
              |           |          |__ Migrations
              |           |          |__ Factories
              |           |          |__ Seeders
              |           |
              |           |__ Events
              |           |__ Exceptions
              |           |__ Facades
              |           |__ Listeners
              |           |__ Models
              |           |          |__ Entities
              |           |          |__ Domains
              |           |          |__ Observers
              |           |          |__ Repositories
              |           |
              |           |__ Providers
              |           |__ Policies
              |           |__ Resources
              |           |__ Requests
              |           |__ Routes
              |           |__ Validators
              |           |__ Views
              .
              .
              .
```

<!-- GETTING STARTED -->
### Installation 


### Usage
 1. use `php artisan module:init` to initial.
 2. use `php artisan make:module Post` to create module blueprint.
<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->
## Contact

Karim Pazoki - [@kaafochino](https://twitter.com/kaafochino) - pazoki.karim72@gmail.com
