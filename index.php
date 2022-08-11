<?php
require 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--SC_JS_LIB-->
    <!--SC_PAGE_CHARSET-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Images Upload Form </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.ico"/>
    <link href="layouts/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="layouts/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="layouts/vertical-light-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="layouts/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="layouts/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="src/plugins/src/filepond/filepond.min.css">
    <link rel="stylesheet" href="src/plugins/src/filepond/FilePondPluginImagePreview.min.css">

    <link href="src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />

    <link href="src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body class="layout-boxed" data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100">

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container " id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                            <li class="breadcrumb-item active" aria-current="page">File Upload</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <form {SC_FORM_ATTR}>
                    <!--SC_FORM_HIDDEN-->

                    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#fuSingleFile" class="active nav-link">Single File</a>
                            <a href="#fuMultipleFile" class="nav-link">Multiple File</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Single File</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="profile-image">



                                        <!-- Formulário Miguel  -->

                                        <h2>Miguel Form 1</h2>
                                        <form action="insert.php" method="post" enctype="multipart/form-data">

                                            <div class="img-uploader-content">
                                                <input type="file" name="filepond" value="upload" class="filepond" accept="image/png, image/jpeg, image/gif">
<!--                                                <input type="submit" name="insert">-->
                                            </div>

                                        </form>


                                        <!-- Formulário Miguel -->






                                        <!-- // The classic file input element we'll enhance
                                        // to a file pond, we moved the configuration
                                        // properties to JavaScript -->
<!--                                        <div class="img-uploader-content">-->
<!--                                            <input type="file" class="filepond"-->
<!--                                                   name="filepond" accept="image/png, image/jpeg, image/gif"/>-->
<!--                                        </div>-->




                                    </div>
                                    <button class="btn btn-light-primary mb-2 me-4" value="{SC_FORM_SUBMIT_CALL}">Imagem de Destaque</button>
                                </div>
                            </div>
                        </div>

                        <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple File</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-md-6 mx-auto">

                                            <div class="multiple-file-upload">

                                                <input type="file"
                                                       class="filepond file-upload-multiple"
                                                       name="filepond"
                                                       multiple
                                                       data-allow-reorder="true"
                                                       data-max-file-size="3MB"
                                                       data-max-files="3">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </form>


            </div>
        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank" href="https://designreset.com/cork-admin/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->

    </div>
    <!--  END CONTENT AREA  -->
</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="layouts/vertical-light-menu/app.js"></script>
<script src="src/plugins/src/highlight/highlight.pack.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="src/assets/js/scrollspyNav.js"></script>
<script src="src/plugins/src/filepond/filepond.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginFileValidateType.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginImagePreview.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginImageCrop.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginImageResize.min.js"></script>
<script src="src/plugins/src/filepond/FilePondPluginImageTransform.min.js"></script>
<script src="src/plugins/src/filepond/filepondPluginFileValidateSize.min.js"></script>
<script src="src/plugins/src/filepond/custom-filepond.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
    multifiles.addFiles('src/assets/img/list-blog-style-2.jpeg');
</script>
</body>
</html>