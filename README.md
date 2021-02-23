# mywebsite
Implemented a PHP website for preparatory school. Supports English and Arabic languages. The website allows teachers to log in and adds various questions to students of
different levels. Allows students to take a quiz of 5 random questions of any subject and see their final score.
The quiz has a time limit of 5 minutes. Allows the manager to see all student's grades.The student can take the
quiz of the same subject any number of times and only the largest score will be recorded. Using Mysql DB, Php,
JavaScript, CSS, HTML and Bootstrap.
*Full Implementation, Design, and Testing.

The Description of each file:
Header and footer : Are separated html, js and style header and footer for all arabic pages to avoid redaundancy of the code.
Headere and footere : Same as previoud but for english pages.

Welcoming.php : Is the welcome page that includes three options and accordingly takes the user to the next page.

config.php : It is database connection credentials which is called in every page. 

Student.php : It is a page for the student to fill its information if the student hits start quiz he is redirected to start.php.

start.php : It is a page that deals with database,checks student's information, avoid redunduncy, starts quiz counter through counter.php and redirects the student to quiz.php.

quiz.php : It is a page contains the first quiz's question and check if the student has answerd this question before if so the student previous answer's radio button must be checked if not all the radio buttons are unchecked. then when student hits next he will redirected to count.php.

count.php : It is a page that deals with database and takes the student answer, enters into the database and redirects the student to next question.

second.php, third.php, fotrth.php, fifth.php : Same as quiz.php.

quize.php, seconde.php, thirde.php, fotrthe.php, fifthe.php : Same as previous but for english quizes.

Redirected to Finalscore.php which contain full student's infromation includes each quiz information.

security.php: It is a login page to the manager it redirects him to check.php.

check.php: It is a page that checks the manager's credentials if they are correct the manager is redirected to full.php else the manager will see not allowed sign an then he will have to go to the welcoming page.

full.php : It is a page that contais the full information of the students.

security2.php :It is a login page to the teachers it redirects them to check2.php.

check2.php: It is a page that checks the teacher's credentials if they are correct the teacher is redirected to teacher1.php else the teacher will see not allowed sign an then he will have to go to the welcoming page.

teacher1.php: It is the page that allows the teacher to fill the teacher's information and redirects the teacher to confirmteacher.php page.

confirmteacher.php: It is a page that redirects the teacher to either teacher.php or teachere.php according to subject.

teacher.php: IT is a page that allows teacher to enter questions and answers and redirects the teacher to bank.php.
teachere.php: Is the same as previous but english.

bank.php : It is a page to insert questions into database and redirect back to teacher.php.





