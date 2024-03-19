<?php

//8. Создайте класс "Оценка задач" с 2 статическими методами:
//1-й метод "получить оценку от разработчика"
//2-й метод "сгенерировать итоговую оценку"
//9. 1-й метод принимает агрумент (язык программирования), этот же аргумент принимает  конструкция switch и в зависимости от языка программирования
// создает объект (если php, то объект PHP разработчика, если java, то объект Java разработчика и тд)
//метод возвращает - результат выполнения метода "оценить задачу" у созданного объекта (разработчик).

namespace App;

class TaskAssessment
{
    public static function getEstimationFromDeveloper($programmingLanguage): int
    {
        switch ($programmingLanguage) {
            case 'backend':
                $backendDeveloper = new BackendDeveloper('Eva', 18, 'junior');
                return $backendDeveloper->estimateTask(0, 10);
            case 'front':
                $frontendDeveloper = new FrontendDeveloper('Stepan', 28, 'middle');
                return $frontendDeveloper->estimateTask(0, 10);
            case 'devops':
                $devOpsDeveloper = new DevOpsDeveloper();
                return $devOpsDeveloper->estimateTask(0, 10);
            case 'embedded':
                $embeddedDeveloper = new EmbeddedDeveloper();
                return $embeddedDeveloper->estimateTask(0, 10);
            default:
                return 0;
        }
    }
    public static function getFinalGrand($programmingLanguage): int
    {
        $projectManager = new ProjectManager();
        return $projectManager->estimateTask1(40) + TaskAssessment::getEstimationFromDeveloper($programmingLanguage);
    }
}

//10.  2-й метод принимает в качестве аргумента "язык программирования", создает объект проджект менеджера и возвращает результат
// выполнения метода "оценить задачу" у созданного объекта (проджект менеджера)
//в метод "оценить задачу" в качестве аргумента передается результат выполнения статического метода "получить оценку от разработчика"


