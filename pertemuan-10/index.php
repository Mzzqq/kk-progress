<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/library/bootstrap/css/bootstrap-responsive.min.css" media="screen">
    <link rel="stylesheet" href="/library/assets/styles.css" media="screen">
    <script src="/library/vendors/modernizr-2.6.2-respond-1.1.0.min.js" defer></script>
    <title>6th</title>
</head>
<body>


<div class="span9" id="content">
    <!-- morris stacked chart -->
    <div class="row-fluid">
        <!-- block -->
        <div class="block">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Input Nilai Mahasiswa</div>
            </div>
            <div class="block-content collapse in">
                <div class="span12">
                    <form action="process_nilai.php" method="POST">
                        <fieldset>
                            <legend>Input Nilai Mahasiswa</legend>

                            <div class="control-group">
                                <label class="control-label" for="NPM">NAMA MAHASISWA</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge focused" id="NPM" name="nama" value="">
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="NPM">PRODI MAHASISWA</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="npm" name="prodi" value="">
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="NPM">ULANGI</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="ulangi" value="">
                                        </div>

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            <button type="reset" class="btn">Cancel</button>
                                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>