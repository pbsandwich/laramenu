# Laramenu

The *purpose* of this project was to recreate a two-page menu (based on Applebee's website menu).
As a group we learned how to create a single table that contained categories, subcategories, and items.
We displayed the categories on the first page, the subcategories on the second page, and items 
on the second page.

In our first version of the table, we included the subcat_id. This turned out to be a cool idea
when we later added a delete button. You could delete main category items with just a query. Later, we
redesigned the table without the subcat_id. This took away the ability to delete main category items
with just a query. But the cool thing was we could do the same thing in code. 

We then changed the one table into two tables. Most everything worked the same.

## Other notes:

I used four methods to display the data: home, subcat, item, and subitem.
The home method displays the main categories (links) on the welcome blade view.
The subcat method displays the subcategories (links) on the subcat blade view.
The item method displays the items from the item blade view.
The subitem method displays the items from the item blade view (using the subcat_id).
02/23/16. Changed the table structure from one table called menu to two tables
          called items and catsubcat. Wrote code to handle delete for missing subcat_id.

2/22/16. Added this new Delete function (thanks to Coby and Jordan).
To cascade delete from the welcome blade view, all three lines will delete records.
To cascade delete from the subcat blade view, only the last two lines will delete records.
To delete items from the item blade view, only the last line will delete records.
2/23/16. Changed delete to work with the two-table structure: items and catsubcat. Since we
         deleted subcat_id, needed to add code to handle delete from main blade view page.

     



# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
