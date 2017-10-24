<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> <!--Bootstrap 4 Stylesheet Import-->
	<link rel="stylesheet" href="login.css"> <!--Local Stylesheet Import-->
</head>
<body ng-app="appModule" ng-cloak>
	<div id="background-image"></div>
	<div ng-controller="viewController" ng-include src="template.url"><!--Container para realizar o Ng-include--></div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!--Jquery Import-->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> <!--Bootstrap 4 Import-->
<script src="node_modules/angular/angular.js"></script> <!--AngularJS Import-->
<script src="node_modules/angular-animate/angular-animate.js"></script> <!--Angular Material Dependency (Animations) Import-->
<script src="node_modules/angular-aria/angular-aria.js"></script> <!--Angular Material Dependency (Accessibility) Import-->
<script src="node_modules/angular-messages/angular-messages.js"></script> <!--Angular Material Dependency (Angular Messages) Import--> 
<script src="node_modules/angular-material/angular-material.js"></script> <!--Angular Material Import-->
<script type="text/javascript" src="https://use.fontawesome.com/574c45c449.js"></script> <!--Font Awesome Import-->
<script type="text/javascript" src="login.js"></script> <!--Local Javascript Import-->
</html>


<!-- 
Tutoriais Angular Messages 	
https://www.yearofmoo.com/2014/05/how-to-use-ngmessages-in-angularjs.html 
https://docs.angularjs.org/api/ngMessages/directive/ngMessages
-->


<!--HOW TO SOLVE CROSS-ORIGIN REQUESTS Quando utilizando Ng-include
https://stackoverflow.com/questions/43936500/cross-origin-requests-are-only-supported-for-protocol-schemes-http-data-chrom-->