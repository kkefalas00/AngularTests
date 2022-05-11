<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>



<div ng-app="myApp" ng-controller="namesCtrl">

<p>Looping with objects:</p>

<select ng-model="test">
<option ng-repeat="c in epiloges">{{c}}</option>
</select>
<br><br>
<table border="1">
<tr ng-repeat="x in names | orderBy:'country'| filter:test">
<td>{{x.name}}</td>
<td>{{x.country}}</td>
</tr>

</table>

</div>

<script>
var a=angular.module('myApp', []);

a.controller('namesCtrl', function($scope) {
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
    $scope.epiloges=['','Norway','Sweden','England','Denmark']
 
});
</script>

</body>
</html>
