# laravel-practices-crud
learning and practices crud system
1. laravel new crud-app - create the project
2. cd example-app
3. npm install && npm run build
4. composer run dev
5. go to database.php and set mysql engine set as 'InnoDB'
6. go to .env and set DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME,(mysql and db name student_db)

7. create model using php artisan make:model Student -m
8. create migration using php artisan migration (check is it done in database)
9. create controller using php artisan make:controller StudentController --resource
10. go to databse folder and create table in migration folder's migration file that created for student table (untraced file)  and run php artisan migrat
11. go to StudentController.php and add function index, create, store, show, edit, update, destroy
12. go to web.php and add route for crud operation (have to set the path - use App\Http\Controllers\StudentController;);
13. go to resources/views/student/index.blade.php and add table for crud operation
14. go to resources/views/student/create.blade.php and add form for crud operation
15. go to resources/views/student/edit.blade.php and add form for crud operation
16. go to resources/views/student/show.blade.php and add form for crud operation



7. create model using php artisan make:model Grade -m
8. create migration using php artisan migration (check is it done in database)
9. create controller using php artisan make:controller GradeController --resource
10. go to database folder and create table in migration folder's migration file that created for grade tabl (untraced file)  and run php artisan migrate:refresh
11. go to GradeController.php and add function index, create, store, show, edit, update, destroy
12. go to web.php and add route for crud operation (have to set the path - use App\Http\Controllers\GradeController;)
13. go to resources/views/grade/index.blade.php and add table for crud operation
14. go to resources/views/grade/create.blade.php and add form for crud operation
15. go to resources/views/grade/edit.blade.php and add form for crud operation
16. go to resources/views/grade/show.blade.php and add form for crud operation





7. create model using php artisan make:model Subject -m
8. create migration using php artisan migration (check is it done in database)
9. create controller using php artisan make:controller SubjectController --resource
10. go to database folder and create table in migration folder's migration file that created for subject tabl (untraced file)  and run php artisan migrate:refresh
11. go to SubjectController.php and add function index, create, store, show, edit, update, destroy
12. go to web.php and add route for crud operation (have to set the path - use App\Http\Controllers\SubjectController;)
13. go to resources/views/subject/index.blade.php and add table for crud operation
14. go to resources/views/subject/create.blade.php and add form for crud operation
15. go to resources/views/subject/edit.blade.php and add form for crud operation
16. go to resources/views/subject/show.blade.php and add form for crud operation









