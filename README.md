Laravel-Eloquent-Relationship-Example
=====================================

Really stupid laravel eloquent example for relationship with three models and one field, with same field name (Actually this was created for some other bug testing purpose)

Example Relationship has three model owner,shop and  customer.Each of this owner,customer and shop ahas one field named phone.
Owner has many shops and has many customers through shops.
Shops has many customer and it belongs to a owner.
Customer belongs to the shops.


Steps to test
-------------------------
1 - Download the repository
2 - Set the db config & run the migration 'php artisan migrate'
3 - Seed the database 'php artisan db:seed'
4 - Start the development server 'php arisan serve'
5 - Access the server 'http://localhost:8000'

You will be able to see a table which was created using laravel eloquent relationships, see the models to understand the relationships
