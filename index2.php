<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>

<div ng-app="myApp2" ng-controller="myCtrl2">
{{ firstName + ":" + x + "," + y }}
</div>

<script>


var app2 = angular.module("myApp2", []);

app2.controller("myCtrl2", function($scope) {
  $scope.firstName="Kon";	
  $scope.x = "10";
  $scope.y = "20";
});



</script>

</body>
</html>