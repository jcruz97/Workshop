# DO NOT SHOW TO PARTICIPANTS

# Steps for the email screen :

1. Create a screen : ``` php artisan orchid:screen EmailSender ```

2. Create the route in _routes/platform.php_

3. Route : ```php  Route::screen('email', EmailSenderScreen::class)->name('platform.email'); ```

4. Go to http://localhost:8000/admin/email

5. Change name and description

6. Fill the ``` layout() ``` with the email form

7. Send button in ``` commandBar() ```

8. Set-Up send message public function

9. query() if time is OK ?

10. Add Item "Email" to menu NavBar