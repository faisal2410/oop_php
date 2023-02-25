<?php
// Include the Gradebook, Course, and Student classes
require_once 'gradebook.php';
require_once 'course.php';
require_once 'student.php';

// Create some students
$student1 = new Student( 's001', 'Faisal' );
$student2 = new Student( 's002', 'Talha' );
$student3 = new Student( 's003', 'Afnan' );

// Create a course and add the students
$course1 = new Course( 'c001', 'Math' );
$course1->addStudent( $student1 );
$course1->addStudent( $student2 );
$course1->addStudent( $student3 );

// Add grades for the students
$course1->addGrade( 's001', 80 );
$course1->addGrade( 's002', 90 );
$course1->addGrade( 's003', 85 );

// Create another course and add the students
$course2 = new Course( 'c002', 'Science' );
$course2->addStudent( $student1 );
$course2->addStudent( $student2 );
$course2->addStudent( $student3 );

// Add grades for the students
$course2->addGrade( 's001', 95 );
$course2->addGrade( 's002', 90 );
$course2->addGrade( 's003', 80 );

// Create a gradebook and add the courses
$gradebook = new Gradebook();
$gradebook->addCourse( $course1 );
$gradebook->addCourse( $course2 );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gradebook</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Gradebook</h1>

    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $gradebook->getCourses() as $course ): ?>
                <?php foreach ( $course->getStudents() as $student ): ?>
                    <tr>
                        <td><?php echo $student->getName(); ?></td>
                        <td><?php echo $course->getName(); ?></td>
                        <td><?php echo $course->getGrade( $student->getId() ); ?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
