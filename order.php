<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 4/12/2556
 * Time: 11:26 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.0.1-p7/js/bootstrap.min.js"></script>

    <!-- colorpicker -->
    <link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" />
    <script type="text/javascript" src="js/colorpicker.js"></script>


    <style type="text/css">
        .iphone-custom {
            position: absolute;
            left: 0;
        }

        .color-chose {
            position: relative;
            top: 0;
            left: 0;
            width: 36px;
            height: 36px;
            background: url("images/select2.png");
            display: inline-block;
            vertical-align: middle;
        }
        .color-chose div {
            position: absolute;
            top: 4px;
            left: 4px;
            width: 28px;
            height: 28px;
            background: url("images/select2.png") center;
        }
        .color-label {

        }
    </style>
</head>
<body>
<div class="container">
    <form class="form-horizontal" style="max-width: 640px; margin: 0 auto;">
        <fieldset>

            <!-- Form Name -->
            <legend>Application Order</legend>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="logo">Logo</label>
                <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="logo"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 64px; height: 64px;"></div>
                    </div>
                </div>
            </div>

            <!-- File Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="loader">Loader</label>
                <div class="col-md-4">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div>
                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="loader"></span>
                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 320px; height: 500px;"></div>
                    </div>
                </div>
            </div>

            <!-- Custom color -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Color theme</label>
                <div class="col-md-4" style="margin-top: -10px;">
                    <div style="position: relative">
                        <img src="images/iphone-model.png">
                        <div class="iphone-custom iphone-bg" style="top: 51px;
                        left: 29px;
                        position: absolute;
                        width: 150px;
                        height: 261px;
                        z-index: 1;
                        background: #000000;">
                            <div class="iphone-custom iphone-bar" style="top: 0; width: 100%; height: 30px; z-index: 2; background: #69bdff;"></div>
                            <div class="iphone-custom iphone-nav" style="bottom: 0; height: 30px; width: 100%; z-index: 2; background: #3760ff;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-label">
                        <div class="color-chose chose-bar"><div style=""></div></div>
                        <input type="hidden" name="color-bar" value="fcca00"> Top bar<br />
                    </div>
                    <div class="color-label">
                        <div class="color-chose chose-bg"><div style=""></div></div>
                        <input type="hidden" name="color-bg" value="000000"> Background<br />
                    </div>
                    <div class="color-label">
                        <div class="color-chose chose-nav"><div style=""></div></div>
                        <input type="hidden" name="color-nav" value="13e257"> Nav bar<br />
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Application Name</label>
                <div class="col-md-5">
                    <input id="name" name="name" type="text" placeholder="Application Name" class="form-control input-md" required="">
                    <span class="help-block">need 4-12 character</span>
                </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="features">Features</label>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label for="features-0">
                            <input type="checkbox" name="features" id="features-0" value="update">
                            Updates
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="features-1">
                            <input type="checkbox" name="features" id="features-1" value="showcase">
                            Showcase
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="features-2">
                            <input type="checkbox" name="features" id="features-2" value="video">
                            Video
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="features-3">
                            <input type="checkbox" name="features" id="features-3" value="class">
                            Class
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="features-4">
                            <input type="checkbox" name="features" id="features-4" value="activity">
                            Activity
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="features-5">
                            <input type="checkbox" name="features" id="features-5" value="calendar">
                            Calendar
                        </label>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>
    <script type="text/javascript">
    $(function(){
        function changeColor(section, hex){
            $('.color-chose.chose-'+section+' div').css('backgroundColor', '#' + hex);
            $('.iphone-custom.iphone-'+section).css('backgroundColor', '#' + hex);
            $('input[name="color-'+section+'"]').val('#' + hex);
        }

        $(".color-chose.chose-bar").ColorPicker({
            color: "#"+$('input[name="color-bar"]').val(),
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                changeColor("bar", hex);
            }
        });
        changeColor("bar", $('input[name="color-bar"]').val());

        $(".color-chose.chose-bg").ColorPicker({
            color: "#"+$('input[name="color-bg"]').val(),
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                changeColor("bg", hex);
            }
        });
        changeColor("bg", $('input[name="color-bg"]').val());

        $(".color-chose.chose-nav").ColorPicker({
            color: "#"+$('input[name="color-nav"]').val(),
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                changeColor("nav", hex);
            }
        });
        changeColor("nav", $('input[name="color-nav"]').val());
    });
    </script>
</div>
</body>
</html>
