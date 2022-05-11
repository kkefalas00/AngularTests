<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>



<div ng-app="myApp" ng-controller="myCtrl">

<p>Table of data:</p>

<input type="text" ng-model="test1" placeholder="Search">
<table class="table table-hover">
<tr><th>Fullname</th><th>Username</th><th>Phone</th></tr>

<tr ng-repeat="x in data | filter:test1">
<td>{{x.fullname}}</td><td>{{x.username}}</td><td>{{x.phone}}</td>
</tr>

</table>

</div>

<script>

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("query.php").then(function (response) {
      $scope.data = response.data;
  });
});

</script>

</body>
</html>
