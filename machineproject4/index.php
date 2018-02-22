<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Machine Project 4</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <style>
            body{
                background-color: #87D37C;
                color:#E4F1FE;
            }
            .margin{
                margin-top: 300px;
            }
           
        </style>
    </head>
    <body>
        <div class ="container-fluid">
            <div class="wrapper">
                <div class="margin">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <h1> <i class="fas fa-coffee"></i> Month</h1>
                        </div>
                        <div class="col-md-2">
                            <select class = "form-control ">                     
                                <?php
                                // MONTH
                                for ($x = 1; $x <= 12; $x++) {
                                    echo "<option value=" . $x . ">" . $x . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <h1><i class="fas fa-globe"></i> Date</h1>
                        </div>
                        <div class="col-md-2">
                            <select class = "form-control"> 
                                <?php
                                // DAY
                                for ($x = 1; $x <= 31; $x++) {
                                    echo "<option value=" . $x . ">" . $x . "</option>";
                                }
                                ?>
                            </select>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <h1><i class="fas fa-paperclip"></i> Year</h1>
                        </div>
                        <div class="col-md-2">
                            <select class = "form-control"> 
                                <?php
                                // year
                                for ($x = 1900; $x <= 2099; $x++) {
                                    echo "<option value=" . $x . ">" . $x . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
