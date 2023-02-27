<?php
include_once("../config.php");

if(isset($_POST['send'])){
    $name=mysqli_real_escape_string($conn,$_POST['blog']);
    $short_desc=mysqli_real_escape_string($conn,$_POST['short_desc']);
    $editordata=mysqli_real_escape_string($conn,$_POST['editordata']);
    $file=$_FILES['file']['name'];
    $tmp_file=$_FILES['file']['tmp_name'];

    if(move_uploaded_file($tmp_file,'../assets/img/blog/'.$file)){
$sql=mysqli_query($conn,"INSERT INTO `blog`(`name`, `short_desc`, `file`, `long_desc`) VALUES ('$name','$short_desc','$file','$editordata')");
if($sql==1){
    echo '<script>alert("Successfully Submitted");</script>';
}
else{
    echo '<script>alert("Something Went Wrong");</script>';
}
    }

}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AIIITS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="http://aiiits.com/">
    <meta name="description" content="AIIITS">
    <meta property="og:title" content="AIIITS" />
    <meta property="og:description" content="A leading Information Technology (IT) training provider." />
    <meta property="og:image" content="http://aiiits.com/../assets/img/logo/aiiitsfootlogo.png" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>

<body>


    <!-- back to top end -->


    <!-- offcanvas area end -->

    <main>


        <!-- contact area start -->
        <section class="contact__area  pt-50 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 contanct_form_4" style='padding:10px 30px'>
                        <div class="contact_form mt-40">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="section__title-wrapper mb-20">
                                        <h2 class="section__title">Blog<span class="yellow-bg yellow-bg-big">
                                                </span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <form method='post' enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Blog Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                         name='blog'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Short Description</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        name="short_desc">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Main Image</label>
                                    <input type="file" class="form-control" id="exampleFormControlInput1"
                                        name="file">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Long Description</label>
                                    <textarea id="summernote" name="editordata" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type='submit' name='send' value='submit'>
                                </div>
                            </form>
                        </div> <!-- contact form -->
                    </div>

                </div> <!-- row -->

            </div>
        </section>
        <!-- contact area end -->



    </main>

    <!-- footer area start -->

    <!-- footer area end -->

    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="../assets/js/slider.js"></script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
    <script>
        AOS.init({
            duration: 1400,
        })
    </script>


</body>

</html>