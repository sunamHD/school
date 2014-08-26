Project: Virtual Class
======================

USAGE:
------

***Note: These instructions assume you are using the LAMP stack and already have mySQL, php, and Apache installed.***

0: Clone this repository in /var/www, or download/unpack the zip into /var/www, and rename "school-master" to "school"

1: Create a mySQL database and user, give the user all privileges on the database

2: Edit school/application/config/database.php so that the following lines correspond to your db and user.

```
$db['default']['hostname'] = 'localhost';
```
```
$db['default']['username'] = 'yourUser';
```
```
$db['default']['password'] = 'yourPassword';
```
```
$db['default']['database'] = 'yourDB';
```
```
$db['default']['dbdriver'] = 'mysql';
```

3: Load the database dump into your database

```
$ mysql -u root -p[yourpasswordHere] [yourDBhere] < school/dump.sql
```

4: Navigate to localhost/school in your web browser

If you're wondering where the code for MY_Controller is, it is in school/application/core.

Description:
------------

**Build a system that allows:**

1. managing a population of sophomore students
2. managing list of classes available for sophomore students
3. enrolling any student in any class

**Features of the system:**

1. Add a student, remove a student, edit a student (you decide what demographic data you want to capture on student)
2. Add a class, remove a class, edit a class (you decide what attributes of a class you want to capture, but it should have at least a title)
3. Display a list of students (paginated with 20 students per page)
4. Display a list of classes (paginated with 10 classes per page)
5. A way to enroll a student in a class and remove a student from a class
6. A way to display all students for any class.
7. In the student edit form allow entering first name, middle name and last name in separate fields, but display the generated “Full Name” at the top, dynamically, using Javascript and jQuery

**Frameworks and tools to use:**

1. PHP programming language
2. MySQL database
3. [CodeIgniter](https://ellislab.com/codeigniter/user-guide/)
4. HTML, CSS, jQuery
5. [Bootstrap](http://getbootstrap.com/)

** Tables were generated using [dataTables](http://www.datatables.net/) **

An example of what the site looks like can be found at [imgur](http://i.imgur.com/COGe15s.png). The page shows the enrolled students for a class that was selected.
