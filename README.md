<h1>Activity Management System</h1>
A PHP-based application for managing activities, tasks, and schedules. 
This application helps users to keep track of their daily activities, manage deadlines, and stay organized.

<h3>Features</h3>
User authentication and authorization
Create, update, and delete activities
Schedule activities with start and end dates
Assign priorities to tasks
Track the status of each activity
Dashboard with an overview of upcoming and overdue activities
Notifications and reminders for upcoming activities
<h3>Installation Prerequisites</h3>
PHP 7.4 or higher
MySQL 5.7 or higher
Composer
A web server (e.g., Apache, Nginx)
Steps
Clone the repository:

bash
Copy code
git clone https://github.com/Rukundo-Bahati/PHP-Activity-management-system.git
cd activity-management-system
Install dependencies:

bash
Copy code
composer install
Set up the database:

Create a MySQL database.
Import the provided SQL schema into the database:
bash
Copy code
mysql -u username -p database_name < database/schema.sql
Configure the environment:

Copy the .env.example file to .env and update the database credentials:
bash
Copy code
cp .env.example .env
Edit the .env file with your database settings:
ini
Copy code
DB_HOST=localhost
DB_NAME=database_name
DB_USER=username
DB_PASS=password
Run the application:

Start your web server.
Navigate to the application URL in your web browser.
Usage
Register a new user account or log in with an existing account.
Navigate to the dashboard to view your upcoming and overdue activities.
Create new activities by clicking on the "Add Activity" button.
Manage your activities from the activities list.
Contributing
Fork the repository.
Create a new branch for your feature or bugfix:
bash
Copy code
git checkout -b feature-name
Commit your changes:
bash
Copy code
git commit -m "Description of the feature or fix"
Push to the branch:
bash
Copy code
git push origin feature-name
Open a pull request.
License
This project is licensed under the MIT License. See the LICENSE file for details.

Acknowledgements
PHP
Composer
Bootstrap
Font Awesome
