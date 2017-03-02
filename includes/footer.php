<!DOCTYPE html>
<html lang="fr">

<head>
    <title>footer</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/css/style_footer.css">
</head>

<body>


<footer>
    <div class="container-fluid">
        <div class="row text text-center">
            <div class="col-md-4 col-sm-12">
                <h4>Partager</h4>
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a>
                    </li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-12">
                <!-- Button to trigger modal -->
                <a href="#myModal" role="button" class="btn btn-custom" data-toggle="modal">Contact</a>
                <!-- Modal -->
                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Ecrivez-nous !</h4>
                            </div>
                            <div class="modal-body">

                                <!-- Formulaire de contact-->
                                <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                                    <div class="form-group">
                                        <label class="control-label col-md-4" for="first_name">Prénom</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4" for="last_name">Nom</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4" for="email">Email</label>
                                        <div class="col-md-6 input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4" for="comment">Votre message</label>
                                        <div class="col-md-6">
                                            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <button type="submit" value="Submit" class="btn btn-custom pull-right">Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 hidden-xs">
                <h4>Partenaires</h4>

                <ul class="partners">
                    <li><img src="http://www.grandparquet.com/wp-content/uploads/2016/05/logo.png" alt="Logo du Grand Parquet" />
                    </li>
                    <li><img src="https://image.jimcdn.com/app/cms/image/transf/dimension=162x10000:format=png/path/sb17ab31817e946c7/image/id8e005e33c48a861/version/1453064990/image.png" alt="Logo de l'hippodrome de la Solle" />
                    </li>
                    <li><img src="http://www.shn-fontainebleau.com/media/images/logo.png" alt="Logo du C" />
                    </li>
                </ul>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 col-sm-12">
                <h3>&#169; Wild Code School - 2017</h3>
            </div>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>