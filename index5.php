<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>

<div class=container>
<div class=row>
	<div class=col-md-3>
	</div>
	<div class=col-md-6>
		<div ng-app="myApp" ng-controller="namesCtrl">
			
				<table class=table >
				  <tr>
					<th ng-click="orderByMe('name')">Name</th>
					<th ng-click="orderByMe('country')">Country</th>
				  </tr>
				  <tr ng-repeat="x in names | orderBy:myOrderBy">
					<td>{{x.name}}</td>
					<td>{{x.country}}</td>
				  </tr>
				</table>

		</div>
	</div>
	<div class=col-md-3>
	</div>
</div>
</div>
<script>
angular.module('myApp', []).controller('namesCtrl', function($scope) {
  $scope.names = [
    {name:'Jani',country:'Norway'},
    {name:'Carl',country:'Sweden'},
    {name:'Margareth',country:'England'},
    {name:'Hege',country:'Norway'},
    {name:'Joe',country:'Denmark'},
    {name:'Gustav',country:'Sweden'},
    {name:'Birgit',country:'Denmark'},
    {name:'Mary',country:'England'},
    {name:'Kai',country:'Norway'}
  ];
  $scope.orderByMe = function(x) {
    $scope.myOrderBy = x;
  }
});
</script>

</body>
</html>