<?php
//1. создать абстрактный класс "разработчик" с обязательным к реализации методом "оценить задачу"
//2. реализовать 4 класса потомка по стеку технологий (например JavaDeveloper, PhpDeveloper и тд)
//3. в каждом классе определить как минимум 3 ТИПИЗИРОВАННЫХ свойства: имя, возраст, должность (Junior, Middle, Senior, TeamLead)
//4. для 2-х классов проинициализировать переменные в конструкторе, а для 2-х других с помощью сеттера
//5. метод "оценить задачу" возвращает рандомное число от 1 до 10

use app\Developer;
use App\BackendDeveloper;
use App\DevOpsDeveloper;
use App\ProjectManager;
use App\TaskAssessment;

require_once('../vendor/autoload.php');

//$backendDeveloper = new \App\BackendDeveloper('Eva', 18, 'junior');
////echo $backendDeveloper->estimateTask(0, 10);
//
//$frontendDeveloper = new \App\FrontendDeveloper('Stepan', 28, 'middle');
////echo $frontendDeveloper->estimateTask(0, 10);
//
//
//$embeddedDeveloper = new DevOpsDeveloper();
//$embeddedDeveloper->setName('Sasha');
//$embeddedDeveloper->setAge(38);
//$embeddedDeveloper->setJobTitle('senior');
////echo $embeddedDeveloper->name, $embeddedDeveloper->age, $embeddedDeveloper->jobTitle;
////\App\EmbeddedDeveloper::estimateTask(0, 10);
//
//$devOpsDeveloper = new DevOpsDeveloper();
//$devOpsDeveloper->setName('Sergey');
//$devOpsDeveloper->setAge(48);
//$devOpsDeveloper->setJobTitle('TeamLead');
////echo $devOpsDeveloper->name, $devOpsDeveloper->age, $devOpsDeveloper->jobTitle;
////DevOpsDeveloper::estimateTask(0, 10);
//
////6. создать интерфейс Менеджер с методом "оценить задачу", который принимает в качестве аргумента количество часов
////7. создать класс Проджект Менеджера, который имплементирует интерфейс, внутри реализовать метод, который возвращает аргумент
//// умноженный на константу  класса Менеджер (константа "издержки времени" - задайте любое число)
//
//$projectManager = new ProjectManager();
//echo ($projectManager->estimateTask1(30));

//echo TaskAssessment::ProgrammingLanguage('embedded');
//
//11. вывести на экран результат выполнения статического метода "сгенерировать финальную оценку"

echo TaskAssessment::getFinalGrand('backend') . "\n";
echo TaskAssessment::getFinalGrand('front') . "\n";
echo TaskAssessment::getFinalGrand('devops') . "\n";
echo TaskAssessment::getFinalGrand('embedded') . "\n";










