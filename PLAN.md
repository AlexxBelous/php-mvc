#### basicPHP___1
- [x] Setting up the initial project structure:
    - [x] Creating app  > controllers, views.
        - [x] In controllers creating  > posts  > index.php, create.php, show.php, destroy.php, store.php.
        - [x] In views creating  > errors, posts, includes, index.php, about.php
            - [x] In errors creating  > 404.tpl.php, 500.tpl.php.
            - [x] In posts creating  > create.tpl.php, show.tpl.php, index.tpl.php
            - [x] In includes creating  > header.tpl.php, footer.tpl.php, sidebar.php
    - [x] Creating config --> config.php, db.php, routes.php
        - [x] In Core creating classes  > Router.php.
- [x] Defining constants for key directories and the base URL of the project in PHP, [___video-03___], `00:24:50`-`00:28:50`
- [x] Connecting all paths to styles and files.
- [x] Adding favicon.ico to the website, [___video-04___], `00:10:25`-`00:12:00`
- [x] Add function abort(), [___video-04___], `00:12:30`-`00:14:00`
- [x] Setting the base URL tag that defines the root path for all relative links in the document., [___video-04___], `00:17:00`-`00:18:00`
- [x] Adding autoloader for classes via Composer, [___video-12___], `00:40:00`-`00:43:00`
___

---
#### basicPHP___2
- [x] Implementing routing functionality on the website, [___video-14___], `00:08:00`-`00:30:00`
- [x] Add a new Blog link and router for it.
- [x] Dynamic active link highlighting based on the current URL.

---

---
#### basicPHP___3
- [x] Creating a database, [___video-05___], `00:11:00`-`00:14:00`
- [x] Working with file db.php, [___video-06___], `00:00:30`-`00:05:00`
- [x] Working with file class Db.php, [___video-08___]
    - [x] The implementation of the Singleton pattern for database connection, [___video-08___], `00:00:00`-`00:10:00`
    - [x] The creation of functionality for establishing a database connection, [___video-06___], `00:05:00`-`00:19:00`
    - [x] Creating custom methods for retrieving results from the database, [___video-07___], `00:05:00`-`00:20:00`
- [x] Initializing the connection and retrieving all records, 3 records  for controller index.php about.php, blog/index.php, [___video-07___], `00:20:00`-`00:29:00`


---

---
#### basicPHP___4
- [x] Creating service container for database, [___video-16___], `00:02:00`-`00:24:00`
- [x] Creating a function to initialize the database connection, [___video-16___], `00:02:00`-`00:24:00`
- [x] To correct class DB, [___video-16___], `00:26:00`-`00:33:00`
---

---
#### basicPHP___5
- [x] Creating a Form for Adding Posts, [___video-9___], `00:03:00`-`00:04:00`
- [x] Creating a Route to Display the Form, [___video-9___], `00:04:00`-`00:06:00`
- [x] Setting Up Form Submission, [___video-9___], `00:06:00`-`00:10:00`
- [x] Generating a slug from the post title and saving the post
- [x] Deleting a post, [___video-15___], `00:03:00`-`00:28:00`

---

---
#### basicPHP___6
- [x] Refactoring database access(service container) across multiple files.
- [x] Implementation of dynamic routing with named parameters, [___video-26___], `00:05:00`-`00:15:00`
- [x] Refactoring method matching, [___video-26___], `00:05:00`-`00:26:00`
- [x] Refactoring to human-readable URLs using slugs, [___video-26___], `00:26:00`-`00:33:00`
- [x] Add route_param() function, [___video-26___], `00:33:00`-`00:40:00`
---

---
#### basicPHP___7
- [x] Validation form:
    - [x] Filtering form data from global array POST based on allowed keys in the $fillable array [___video-9___], `00:22:00`-`00:28:00`
    - [x] Functionality displaying error messages for form fields [___video-9___], `00:28:00`-`00:32:00`
    - [x] Functionality retaining entered field (add function old() + h() ) [___video-10___], `00:01:00`-`00:012:00`
    - [x] Adding the htmlspecialchars + flag ENT_QUOTES function to output data from the database. [___video-10___], `00:12:00`-`00:19:00`
    - [x] Saving post data to the database with validation and slug generation [___video-10___], `00:20:00`-`00:23:00`
    - [x] Add redirect() function to redirect to a URL or the previous page. [___video-10___], `00:23:00`-`00:29:00`
    - [x] Inserting data into the database with error handling. [___video-10___], `00:29:00`-`00:33:00`
    - [x] Inserting data and saving the message in the session. [___video-13___], `00:05:00`-`00:07:00`
---

---
#### basicPHP___8
- [x] Validating form data and processing it for database insertion with error handling,  [___video-11___]
- [x] Show errors validation,  [___video-13___], `00:00:00`-`00:11:00`
- [x] Add component alerts,  [___video-13___], `00:11:00`-`00:18:00`
<<<<<<< HEAD

#### basicPHP___9 - <span style="color: green;">ACTIVE</span>
=======
---

---

#### basicPHP___9
- [x] Add function check_auth,  [___video-17___], `00:03:00`-`00:05:00`
- [x] Creation Middleware. Methods Only  [___video-17___], `00:05:00`-`00:35:00`
---

---
#### basicPHP___10 - <span style="color: green;">ACTIVE</span>
>>>>>>> basicPHP___10
