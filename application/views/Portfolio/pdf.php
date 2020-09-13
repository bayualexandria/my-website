<!DOCTYPE html>
<html lang="en">

<head>
    <link href="asset/img/bayu-1.jpg" rel="icon">
    <title>Resume</title>
    <link href="https://fonts.googleapis.com/css?family=Ranga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">
    <style>
        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Ranga', cursive;
            text-shadow: 0 0 5px 5px rgba(200, 200, 200, 0.8);

        }

        .cards {
            width: auto;
            height: auto;
            margin: 5px auto;

        }

        .cards-header {
            text-align: center;

            font-size: 2rem;
            font-family: fantasy;
        }

        hr {
            border: 0.5px solid rgba(200, 200, 200, 0.8);
            margin-bottom: 1rem;
        }

        .cards-body {

            padding: 5px;
            margin-top: 9rem;

        }

        .img p {
            font-family: 'Volkhov', serif;
            position: absolute;
            font-size: 20px;
            margin: 0 3rem 0 0;
            max-height: 150px;
            text-shadow: 0 0 5px 5px rgba(200, 200, 200, 0.8);

        }


        .img .col-md-1 img {
            width: 8rem;
            border-radius: 50rem;
            border: 2px solid rgba(200, 200, 200, 0.8);
            position: absolute;
            margin: 0 0 0 2rem;

        }

        .cards-body img {
            width: 50px;
        }

        .icon h4 {
            font-weight: bold;
            font-family: fantasy;
            position: absolute;
            margin-top: 5px;
        }


        .facebook {
            width: 15px;
            ;
        }

        .row {

            text-align: justify;
            margin: -2rem 1rem;
        }

        .col-md-1 {
            width: 50%;
            min-height: 1px;
            padding-left: -10px;
            float: left;
        }

        .col-md-1 span {
            margin-top: -0.5rem;
            display: inline-block;
        }

        .col-md-1 h5 {
            margin: 12px 0;
            text-align: justify;

        }

        .col-md-2 span {
            margin-top: -0.5rem;
            display: inline-block;
        }

        .col-md-2 h5 {
            margin: 12px 0;
            text-align: justify;

        }

        .col-md-2 {
            position: relative;
            width: 50%;
            min-height: 1px;
            padding-right: -10px;
            float: right;
        }

        .img .col-md-1 {
            width: 30%;
            min-height: 1px;
            padding-left: -10px;
            float: left;
        }

        .img .col-md-2 {
            position: relative;
            width: 33%;
            min-height: 1px;
            padding-right: -10px;
            float: left;

        }

        .img .col-md-3 {
            position: relative;
            width: 60%;
            min-height: 100px;
            padding-right: -10px;
            float: left;

        }

        .col-md-2 img,
        .col-md-3 img {
            width: 12px;
        }

        .profile {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="cards">
        <div class="cards-header">
            RESUME
            <hr>
            <div class="img">
                <div class="col-md-1">
                    <img class="profile" src="asset/img/resume.jpg" style="border-radius: 50%;" />
                </div>
                <div class="col-md-2">
                    <p style="text-align:center;">Bayu Wardana</p>
                    <br>
                    <p style="font-size:13px;text-align:center;">Full-Stack Programmer</p>
                    <br>
                    <p style="font-size:13px;text-align:center;margin-top:-1rem;">wardanabayu455@gmail.com</p>
                    <p style="font-size:13px;text-align:center;margin-top:0.5rem;">
                        <img src="asset/CV/logo/whatsapp.png" alt="" /> 0813-1614-6399
                    </p>
                </div>
                <div class="col-md-3">
                    <p style="font-size:10px;text-align:center;margin-top:1rem;">
                        <img src="asset/CV/logo/domain.png" alt="" srcset=""> http://bayuwardana.getenjoyment.net
                    </p>
                    <p style="font-size:10px;text-align:center;margin-top:2.5rem;">
                        <img src="asset/CV/logo/instagram.png" alt="" srcset=""> https://www.instagram.com/bayualexandria13/
                    </p>
                    <br>
                    <p style="font-size:10px;text-align:center;margin-top:1.5rem; ">
                        <img src="asset/CV/logo/facebook.png" alt="" srcset=""> https://www.facebook.com/bayu.alexandria.315
                    </p>
                    <br>
                    <p style="font-size:10px;text-align:center;margin-top:0.5rem;">
                        <img src="asset/CV/logo/twitter.png" alt="" srcset=""> https://twitter.com/b4yu_4lex4ndri4
                    </p>
                </div>
            </div>
        </div>
        <div class="cards-body">
            <div class="icon">
                <img src="asset/User/Ionicons/png/512/ios7-person.png">
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <h5>Name</h5>
                    <span><?= $cv['full_name']; ?></span>
                    <h5>Date </h5>
                    <span>Biak, 25 Agustus 1995</span>
                    <h5>Gender</h5>

                    <span><?= $cv['gender']; ?></span>
                    <h5>Religion</h5>
                    <span><?= $cv['religion']; ?></span>
                </div>
                <div class="col-md-2">
                    <h5>Address</h5>
                    <span style="margin-top:-0.2rem;"><?= $cv['address']; ?></span>
                    <h5>No Handphone </h5>
                    <span><?= $cv['phone']; ?></span>
                    <h5>Email</h5>
                    <span><?= $cv['email']; ?></span>
                </div>
            </div>
        </div>
        <hr style="margin-top:14rem;">
        <div class="cards-body" style="padding-top:-8rem;">
            <div class="icon">
                <img src="asset/User/Ionicons/png/512/university.png">
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <h5>Education Degree</h5>
                    <span>Bachelor Degree</span>
                    <h5>Study Program </h5>
                    <span><?= $education['study_program']; ?></span>
                    <h5>Faculty</h5>
                    <span><?= $education['faculty']; ?></span>
                </div>
                <div class="col-md-2">
                    <h5>Title </h5>
                    <span><?= $education['title']; ?></span>
                    <h5>University</h5>
                    <span><?= $education['name_education']; ?></span>
                </div>
            </div>
        </div>
        <hr style="margin-top:11rem;">
        <div class="cards-body" style="padding-top:-8rem;">
            <div class="icon">
                <img src="asset/User/Ionicons/png/512/ios7-gear.png">
                <br><br>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <?php foreach ($skill1 as $s1) : ?>
                        <h5 style="padding-bottom:0.5rem;"><?= $s1['name_skill']; ?></h5>
                        <span style="width:<?= $s1['ranting']; ?>%;height:10px;background-color:skyblue;border-radius:3px;border:1px solid rgba(200,200,200,0.8);text-align:right;;"><i style="font-family: 'Volkhov', serif;font-size:11px;"><?= $s1['ranting']; ?>%</i></span>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-2">
                    <?php foreach ($skill2 as $s2) : ?>
                        <h5 style="padding-bottom:0.5rem;"><?= $s2['name_skill']; ?></h5>
                        <span style="width:<?= $s2['ranting']; ?>%;height:10px;background-color:skyblue;border-radius:3px;border:1px solid rgba(200,200,200,0.8);text-align:right;"><i style="font-family: 'Volkhov', serif;font-size:12px;margin-top:1rem;"><?= $s2['ranting']; ?>%</i></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>