<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- load fontawesome -->
    <style>
        body {
            padding-top: 30px;
        }

        form {
            padding-bottom: 20px;
        }

        .comment {
            padding-bottom: 20px;
        }

        .ng-invalid.ng-dirty {
            border-color: red;
        }

        .ng-valid.ng-dirty {
            border-color: green;
        }

        .thumbnail {
            display: block;
            width: 60px;
        }


    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    <!-- load angular -->

    <!-- ANGULAR -->
    <script src="js/directives/formCommentDirective.js"></script>
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="js/controllers/mainCtrl.js"></script>
    <!-- load our controller -->
    <script src="js/services/commentService.js"></script>
    <!-- load our service -->
    <script src="js/app.js"></script>
    <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="commentApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE -->
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
        <ng-pluralize count="comments.length"
                      when="{'0': 'Nenhum comentário.',
                       'one': '(1) comentário.',
                       'other': '({}) comentários.'}">

    </div>
    <!-- LOADING ICON -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    <!-- THE COMMENTS -->
    <!-- hide these comments if the loading variable is true -->
    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
        <h3>#{{ comment.id }}
            <small>by {{ comment.author }} - {{ comment.email }}
        </h3>
        <p>{{ comment.text }}</p>

        <p><a href="#" class="btn btn-sm btn-danger" ng-click="deleteComment(comment.id)" class="text-muted">Remover</a>
        </p>
    </div>

    <form-comment></form-comment>
</div>
</body>
</html>