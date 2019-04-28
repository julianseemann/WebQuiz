<?php
//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index'
);
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index'
);
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index'
);


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login'
);
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login'
);

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout'
);
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout'
);
$route['/quizlist'] = array('controller' => 'quizListController', 'uniqueName' => 'quizlist');
$route['/quizlist.html'] = array('controller' => 'quizListController', 'uniqueName' => 'quizlist');

$route['/scoreboard'] = array('controller' => 'scoreBoardController', 'uniqueName' => 'scoreboard');
$route['/scoreboard.html'] = array('controller' => 'scoreBoardController', 'uniqueName' => 'scoreboard');

$route['/transition'] = array('controller' => 'transitionController', 'uniqueName' => 'transition');
$route['/transition.html'] = array('controller' => 'transitionController', 'uniqueName' => 'transition');

$route['/startQuiz'] = array('controller' => 'startQuizController', 'uniqueName' => 'startQuiz');
$route['/startQuiz.html'] = array('controller' => 'startQuizController', 'uniqueName' => 'startQuiz');

$route['/questions'] = array('controller' => 'questionsController', 'uniqueName' => 'questions');
$route['/questions.html'] = array('controller' => 'questionsController', 'uniqueName' => 'questions');
