<!DOCTYPE html>
<html lang="en" ng-app="dopeDosage">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://code.angularjs.org/1.4.8/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.4.8/angular-route.js"></script>
    <script src="https://code.angularjs.org/1.4.8/angular-animate.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
    <style>
        .move-down-fifty{
            margin-top:50px;
        }
        .move-down-hunid{
            margin-top:100px;
        }
        
        .main-title{
            margin-top:50px;
        }
        
    </style>
</head>
<body>
   <div class="container">
      <div class="main-title" style="text-align:center">
          <h1 style="font-weight:bold;font-size:72px">DOPE DOSAGE</h1>
      </div>
       <table class="table table-striped move-down-fifty" ng-controller="mainController">
            <thead>
                <tr>
                    <th>IDT: T+0:00</th>
                    <th>Dosage</th>
                    <th>Method</th>
                    <th>Substance</th>
                    <th>Form</th>
                    <th>Food</th>
                </tr>
            </thead>
           <tbody>
                <tr ng-repeat="val in array">
                    <td>{{val.idt}}</td>
                    <td>{{val.dosage}}</td>
                    <td>{{val.method}}</td>
                    <td>{{val.substance}}</td>
                    <td>{{val.form}}</td>
                    <td>{{val.food}}</td>
                </tr>
             <?php

               ?>

           </tbody>

       </table>
       
       <div id="addAdditionRecord" class="move-down-fifty">
           <div class="form">
              <div class="col-lg-12">
                   <div class="col-lg-12" style="text-align:center;">
                       <h4>Insert Additional Value</h4><br/>
                   </div>
                   <div class="col-lg-12">
                        <div class="col-lg-4 col-lg-offset-3">
                            <div class="form-group">
                               <label>IDT:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>

                           <div class="form-group">
                               <label>Dosage:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>
                           <div class="form-group">
                               <label>Method:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>
                       </div>
                       <div class="col-lg-4 col-lg-2">
                           <div class="form-group">
                               <label>Substance:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>
                           <div class="form-group">
                               <label>Form:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>
                           <div class="form-group">
                               <label>Food:</label>
                               <input type="text" class="form-control" style="width: 180px">
                           </div>
                       </div>
                   </div>
               </div>
                <div class="col-lg-12 move-down-fifty" style="text-align:center;">
                   <button class="btn btn-default">Submit to File</button>
               </div>
           </div>
       </div>
   </div>
   
    
</body>
</html>