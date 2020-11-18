<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alegreya&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/f8a270fd98.js" crossorigin="anonymous"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <title>CV Maker</title>

    </head>

    <body style="background-color: #212529; color:white">
        <div class="container mt-5 mb-5">
            <h2 class="mb-3 text-center font-weight-bold">Quick CV Maker</h2>
            <form action="/process" method="post">
                <h5>Please Fill the Following:</h5>
                <p></p>
                <marquee behavior="" direction="">
                    Kindly note your details are not saved.
                </marquee>
                <p></p>
                @csrf
                <input type="text" class="form-control mb-3" name="name" placeholder="Full Name">
                <input type="text" class="form-control mb-3" name="job_title" placeholder="Job Title">
                <input type="text" class="form-control mb-3" name="location" placeholder="Location">
                <input type="text" class="form-control mb-3" name="phone_number" placeholder="Phone Number">
                <input type="email" class="form-control mb-3" name="email" placeholder="Email Address">
                <input type="url" class="form-control mb-3" name="github" placeholder="Github Account Url">
                <input type="url" class="form-control mb-3" name="linkedin" placeholder="LinkedIn Account Url">
                <textarea name="career_profile" id="" cols="30" rows="10" class="form-control mb-3" placeholder="Career Profile"></textarea>
                <div class="form-group">
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Industry Skills</label>
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="text" name="industry_skill[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Industry Skill" required>
                        </div>
                        <div class="col-sm-2">
                            <button class="add_more btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="mt-2 notification">
                    </div>
                </div>
                <div class="form-group">
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Work Experience</label>
                    <div class="">
                        <input type="text" name="work_title[]" class="form-control form-control-sm mb-3" id="colFormLabelSm" placeholder="Work Title" required>
                    </div>
                    <div class="">
                        <input type="text" name="company[]" class="form-control form-control-sm mb-3" id="colFormLabelSm" placeholder="Company" required>
                    </div>
                    <div>
                        Date From<input type="date" name="date_from[]" class="form-control form-control-sm col-md-3 mb-1" id="colFormLabelSm" placeholder="Company" required>
                        Date To<input type="date" name="date_to[]" class="form-control form-control-sm col-md-3 mb-1" id="colFormLabelSm" placeholder="Company">
                        <input type="checkbox" name="present[]" id="" class="mb-3">Present
                    </div>
                    <div class="mb-3">
                        <textarea name="tasks[]" rows="20" cols="10" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tasks" required></textarea>
                        <p></p>
                        <div class=""><button class="add_more_task btn btn-sm btn-success">Add Experience</button></div>
                    </div>
                    <div class="mt-2 experience">
                    </div>
                </div>
                <div class="form-group">
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Education</label>
                    <div class="row">
                        <div class="col-md-2">
                            Degree
                            <input type="text" name="degree[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="BSc" required>
                        </div>
                        <div class="col-md-10">
                            Course
                            <input type="text" name="course[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Course" required>
                        </div>
                        <div class="col-md-8">
                            Institution
                            <input type="text" name="institution[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Institution" required>
                        </div>
                        <div class="col-md-2">
                            Year Ended
                            <input type="date" name="year_ended[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Industry Skill" required>
                        </div>
                        <div class="col-sm-2 mt-4">
                            <button class="add_more_education btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>

                    <div class="mt-2 education">
                    </div>
                </div>

                <div class="form-group">
                    <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Certification</label>
                    <div class="row">
                        <div class="col-md-3">
                            Certificate
                            <input type="text" name="cert_title[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Certificate" required>
                        </div>
                        <div class="col-md-9">
                            Certificate Link
                            <input type="url" name="cert_link[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Certificate Link" required>
                        </div>
                        <div class="col-md-8">
                            Corporation
                            <input type="text" name="corporation[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Corporation" required>
                        </div>
                        <div class="col-md-2">
                            Year
                            <input type="text" name="cert_year[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="year" required>
                        </div>
                        <div class="col-md-2 mt-4">
                            <button class="add_more_certification btn btn-sm btn-success"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>

                    <div class="mt-2 certification">
                    </div>
                </div>
                <input type="submit" class="btn btn-lg btn-light float-right mb-5" name="submit" value="Submit">
            </form>
        </div>

        <script>
            $(document).ready(function() {
                var max_fields      = 10; //maximum input boxes allowed
                var wrapper         = $(".notification"); //Fields wrapper
                var add_button      = $(".add_more"); //Add button ID

                var wrapper_task    = $(".experience"); //Fields wrapper
                var add_more_task   = $(".add_more_task"); //Fields wrapper
                var add_button      = $(".add_more"); //Add button ID

                var wrapper_education    = $(".education"); //Fields wrapper
                var add_more_education   = $(".add_more_education"); //Fields wrapper

                var wrapper_certification    = $(".certification"); //Fields wrapper
                var add_more_certification   = $(".add_more_certification"); //Fields wrapper

                var x = 1; //initlal text box count
                var y = 1; //increase
                var z = 1; //increase
                var a = 1; //increase
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x == max_fields){ //max input box allowed
                        alert('Maximum reached');
                        return;
                    }
                    x++; //text box increment
                    $(wrapper).append('<div class="row"><div class="col-sm-10 mb-2"><input type="text" name="industry_skill[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Industry Skill" required></div><div class="col-sm-2 mb-2"><button class="btn btn-sm btn-danger remove_field"><i class="fas fa-minus"></i></button></div></div>'); //add input box
                });

                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault();
                    $(this).closest(".row").remove();
                    x--;
                })


                $(add_more_task).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(y == max_fields){ //max input box allowed
                        alert('Maximum tasks reached');
                        return;
                    }
                    $(wrapper_task).append('<div class="more_experience"><div class=""><input type="text" name="work_title[]" class="form-control form-control-sm mb-3" id="colFormLabelSm" placeholder="Work Title" required></div><div class=""><input type="text" name="company[]" class="form-control form-control-sm mb-3" id="colFormLabelSm" placeholder="Company" required></div><div>Date From<input type="date" name="date_from[]" class="form-control form-control-sm col-md-3 mb-1" id="colFormLabelSm" placeholder="Company" required>Date To<input type="date" name="date_to[]" class="form-control form-control-sm col-md-3 mb-1" id="colFormLabelSm" placeholder="Company"><input type="checkbox" name="present[]" id="" class="mb-3">Present</div><div class="mb-3"><div class=""><textarea name="tasks[]" rows="20" cols="10" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tasks" required></textarea><p></p><div class=""><button class="remove_task_field btn btn-sm btn-danger">Remove Experience</button></div></div></div>'); //add input box
                    y++;
                });

                $(wrapper_task).on("click",".remove_task_field", function(e){ //user click on remove text
                    e.preventDefault();
                    $(this).closest(".more_experience").remove();
                    y--;
                })

                $(add_more_education).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(z == max_fields){ //max input box allowed
                        alert('Maximum Education reached');
                        return;
                    }
                    $(wrapper_education).append('<div class="row mt-3"><div class="col-md-2">Degree<input type="text" name="degree[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="BSc" required></div><div class="col-md-10">Course<input type="text" name="course[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Course" required></div><div class="col-md-8">Institution<input type="text" name="institution[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Institution" required></div><div class="col-md-2">Year Ended<input type="date" name="year_ended[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Industry Skill" required></div><div class="col-sm-2 mt-4"><button class="remove_education_field btn btn-sm btn-danger"><i class="fas fa-minus"></i></button></div></div>'); //add input box
                    z++;
                });

                $(wrapper_education).on("click",".remove_education_field", function(e){ //user click on remove text
                    e.preventDefault();
                    $(this).closest(".row").remove();
                    z--;
                })

                $(add_more_certification).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(a == max_fields){ //max input box allowed
                        alert('Maximum Certification reached');
                        return;
                    }
                    $(wrapper_certification).append('<div class="row mt-3"><div class="col-md-3">Certificate<input type="text" name="cert_title[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Certificate" required></div><div class="col-md-9">Certificate Link<input type="url" name="cert_link[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Certificate Link" required></div><div class="col-md-8">Corporation<input type="text" name="corporation[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Corporation" required></div><div class="col-md-2">Year<input type="text" name="cert_year[]" class="form-control form-control-sm" id="colFormLabelSm" placeholder="year" required></div><div class="col-md-2 mt-4"><button class="remove_certification_field btn btn-sm btn-danger"><i class="fas fa-minus"></i></button></div></div>'); //add input box
                    a++;
                });

                $(wrapper_certification).on("click",".remove_certification_field", function(e){ //user click on remove text
                    e.preventDefault();
                    $(this).closest(".row").remove();
                    a--;
                })
            });
        </script>
    </body>
</html>
