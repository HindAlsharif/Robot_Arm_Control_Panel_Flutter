# Robot Arm Control Panel Flutter

## Overview
This is a Flutter application designed to control a robotic arm. It allows the user to adjust servo motor values using sliders, and to save and retrieve these positions (poses) from a MySQL database, then execute them.

## Features
- *Motor Control:* Four sliders to control the positions of four servo motors (0-180 degrees).
- *Save Poses:* Save the current motor settings to a MySQL database.
- *Display Poses:* View all saved poses.
- *Load Poses:* Load a saved pose's values back into the sliders.
- *Delete Poses:* Remove a specific pose from the list and the database.
- *Run Pose:* Send the current motor values to the database to execute the pose.
- *View Run Status:* Display the details of the last executed pose and its status.

## Technologies Used
- Flutter
- Dart
- PHP
- MySQL
- Apache

## Usage
1.  Start the Apache and MySQL services using XAMPP.
2.  Import the robot_db.sql file into your database.
3.  Copy the PHP files to your web server directory.
4.  Update the server IP address in the main.dart file of the Flutter app.
5.  Run the Flutter application.
6.  Use the sliders to adjust the motor values.
7.  Click Save Pose to store the settings or Run to execute them.
8.  You can also load a saved pose or delete it from the list.

## Author
- Hind Ibrahim Alsharif
- IT Student at Taif University
