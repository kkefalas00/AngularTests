<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<!--Αν βάλω στο app όνομα δεν θα παίξει, θέλει controller -->
<div class=container>
<div ng-app="" ng-init="data=['Jani','Hege','Kai']; p=[{'fn':'name1','ln':'lname1'},{'fn':'name2','ln':'lname2'},{'fn':'name3','ln':'lname3'}]">


  <ul>
    <li ng-repeat="x in data">
      {{ x }}
    </li>
  </ul>
  
  <table class=table>
  <th>FirstName</th><th>LastName</th>
    <tr ng-repeat="nm in p">
      <td>{{nm.fn}}</td><td>{{nm.ln}}</td>
    </tr>
  </table>
  <form action='' method=post name=frm1>
	Email:<input type=email name=em ng-model="e1">
		<div ng-show="frm1.em.$error.email" style="color:red;">This is not an email</div> <!-- Αυτό εμφανίζεται όταν δεν είναι valid το email-->
  </form>
  
</div>
</div>
</body>
</html>