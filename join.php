1)  SELECT students.id, students.name, degrees.name
    FROM students
    JOIN degrees
    ON students.degree_id = degree_id
    WHERE degrees.name = "Corso di Laurea in Economia";

2)  SELECT degrees.level, degrees.id, departments.name
    FROM degrees
    JOIN departments 
    ON degrees.department_id = departments.id
    WHERE degrees.level = 'magistrale' AND departments.name = "Dipartimento di Neuroscienze";

3)  SELECT degrees.id, degrees.level, teachers.name, teachers.surname
    FROM `degrees`
    JOIN teachers
    ON degrees.id = teachers.id
    WHERE degrees.level = "magistrale" AND teachers.name = "Fulvio" AND teachers.surname = "Amato";

4)  SELECT students.name, students.surname, degrees.name, degrees.level, degrees.email, departments.name
    FROM `students`
    JOIN degrees ON students.id = degrees.id
    JOIN departments ON students.id = departments.id
    ORDER BY students.name ASC, students.surname ASC;

5)  SELECT degrees.name AS Courses_Name , courses.name AS internal_Courses, degrees.level, teachers.name AS teacher_name
    FROM `degrees`
    JOIN courses ON degrees.id = courses.id
    JOIN teachers ON teachers.id = courses.id;