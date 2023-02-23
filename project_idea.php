<?php
/*
Project: Student Gradebook
In this project, we will create a PHP program that allows teachers to enter grades for their students and view overall class statistics. We will create three classes: Student, Course, and Gradebook.

The Student Class
The Student class will have the following properties:

id (string)
name (string)
It will have the following methods:

getId() (returns id)
getName() (returns name)
The Course Class
The Course class will have the following properties:

id (string)
name (string)
students (array of Student objects)
grades (two-dimensional associative array with student IDs as keys and grade values as values)
It will have the following methods:

getId() (returns id)
getName() (returns name)
addStudent($student) (adds a Student object to the students array)
getStudents() (returns the students array)
addGrade($studentId, $grade) (adds a grade value for a specific student ID to the grades array)
getAverageGrade() (calculates and returns the average grade for the course)
The Gradebook Class
The Gradebook class will have the following properties:

courses (array of Course objects)
It will have the following methods:

addCourse($course) (adds a Course object to the courses array)
getCourses() (returns the courses array)
getAverageGrade() (calculates and returns the average grade for all courses)

*/ 