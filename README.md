تغ# Robot Arm Control Panel

## Overview
This is a Flutter application designed to control a robotic arm. It allows the user to adjust servo motor values using sliders, and to save and retrieve these positions (poses) from a MySQL database, then execute them.

## Features
- *Motor Control:* Four sliders to control the positions of four servo motors (0-180 degrees).
- *Save Poses:* Save the current motor settings to a MySQL database.
- *Display Poses:* View all saved poses in an easy-to-read list.
- *Load Poses:* Load a saved pose's values back into the sliders.
- *Delete Poses:* Remove a specific pose from the list and the database.
- *Run Pose:* Send the current motor values to the database to execute the pose.
- *View Run Status:* Display the details of the last executed pose and its status.

## Technologies Used
- *Flutter:* The framework for building the application.
- *Dart:* The programming language used by Flutter.
- *PHP:* A scripting language for creating the API to handle data.
- *MySQL:* The database used to store and manage the motor poses.
- *Apache (XAMPP):* A local server to run the PHP scripts and the database.

## Usage
1.  Start the Apache and MySQL services using XAMPP.
2.  Import the robot_db.sql file into your database.
3.  Copy the PHP files to your web server directory (e.g., htdocs).
4.  Make sure to update the server IP address in the main.dart file of the Flutter app.
5.  Run the Flutter application.
6.  Use the sliders to adjust the motor values.
7.  Click Save Pose to store the settings or Run to execute them immediately.
8.  You can also load a saved pose or delete it from the list.

## Author
Hind Ibrahim Alsharif
IT Student at Taif University
