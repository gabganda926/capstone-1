<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Compreline | Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ URL::asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="signup-page bg-teal">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Compreline|</b>Insurance</a>
            <small>Philippines</small>
        </div>
        <div class="collapse fade" id="individual" role="dialog">
        <div class="card">
        <button class="btn waves-effect" data-toggle="collapse" data-target="#individual" style="float: right;">
                    <i class="material-icons">close</i>
                    </button>
            <div class="body">
                <form id="sign_up" method="POST">
                <h3 style="text-align: center">INDIVIDUAL
                <br/><small>Register a new system account. <br/>
                <small><p style="font-style: italic; color: red; text-align: center;">*Note: Only insured clients are allowed to have system account.</p></small></small></h3>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">account_box</i>
                        </span>
                        <div class="form-line">
                            <select class="form-control show-tick" data-live-search="true"  required>
                                <option value="">-- Client Name --</option>
                                <option value="10">No Min Woo</option>
                                <option value="20">Lee Songjuk</option>
                                <option value="30">Kim Myungsoo</option>
                                <option value="40">Kim Bo Gum</option>
                                <option value="50">Jeon Jungkoook</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-orange">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="collapse fade" id="company" role="dialog">
        <div class="card">

        <button class="btn waves-effect" data-toggle="collapse" data-target="#company" style="float: right;">
                    <i class="material-icons">close</i>
                    </button>
            <div class="body">
                <form id="sign_up" method="POST">
                <h3 style="text-align: center">COMPANY
                <br/><small>Register a new system account. <br/>
                <small><p style="font-style: italic; color: red; text-align: center;">*Note: Only insured clients are allowed to have system account.</p></small></small></h3>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">account_box</i>
                        </span>
                        <div class="form-line">
                            <select class="form-control show-tick" data-live-search="true"  required>
                                <option value="">-- Company Name --</option>
                                <option value="10">No Min Woo</option>
                                <option value="20">Lee Songjuk</option>
                                <option value="30">Kim Myungsoo</option>
                                <option value="40">Kim Bo Gum</option>
                                <option value="50">Jeon Jungkoook</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-orange">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-orange waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.php">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="card">
            <div class="body">
                <h4 style="text-align: center">Select user type</h2>
                <div class="btn-group btn-group-justified" role="group">
                    <a class="btn btn-lg bg-grey waves-effect" data-toggle="collapse" data-target="#individual">
                    <i class="material-icons">person_outline</i>
                    <span>INDIVIDUAL</span>
                    </a>
                
                    <a class="btn btn-lg bg-blue-grey waves-effect" data-toggle="collapse" data-target="#company">
                    <i class="material-icons">people_outline</i>
                    <span>COMPANY</span>
                    </a>
                </div>   <br/><br/>

                <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12">
                            <a href="/sign-in">Already have an account? Sign in.</a>
                        </div>
                    </div> 
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
    <!-- Select Plugin Js -->
    <script src="{{ URL::asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

</body>

</html>
