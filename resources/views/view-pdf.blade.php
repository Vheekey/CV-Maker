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
        <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.min.js"></script>
        <title>CV Maker</title>

    </head>

    <body>
        <button class="btn btn-md btn-dark float-right mr-5" id="generatePDF" onclick="generatePDF()">Generate PDF</button>

        <div class="container mt-5" id="container">
            <div id="pdfPreview">
                <h3><strong>{{ Session::get('name')}} </strong></h3>
                <h6 style="color:#C71585"> <strong> {{ Session::get('job_title')}} </strong></h6>

                <div class="" style="font-size:10px;">
                    <span class="mr-5"><i class="fas fa-phone mr-1" style="color:#C71585;"></i> {{ Session::get('phone_number')}} </span>
                    <span class="mr-3"><i class="fas fa-envelope mr-1" style="color:#C71585;"></i> <a style="color:black" href="mailto:{{ Session::get('email')}}"> {{ Session::get('email')}} </a> </span>
                    <span class="mr-3"><i class="fas fa-map-marker mr-1" style="color:#C71585;"></i> {{ Session::get('location')}} </span> <br>
                    @if (Session::get('linkedin'))
                    <span class="mr-3"><i class="fa fa-linkedin mr-1" style="color:#C71585;"></i> <a style="color:black" href="{{ Session::get('linkedin')}}">{{ Session::get('linkedin')}}</a> </span>
                    @endif
                    
                    @if (Session::get('github'))
                    <span class="mr-3"><i class="fa fa-github mr-1" style="color:#C71585;"></i> <a style="color:black" href="{{ Session::get('github')}}"> {{ Session::get('github')}} </a> </span>
                    @endif
                </div>

                <div class="mt-3 row" style="font-size:12px;">
                    <div style="color:#C71585" class="col-md-2"> <strong> CAREER PROFILE </strong></div>
                    <div style="" class="col-md-10"> {{ Session::get('career_profile')}} </div>
                </div>

                <div class="mt-5 row" style="font-size:12px;">
                    <div style="color:#C71585" class="col-md-2"> <strong> INDUSTRY SKILLS </strong></div>
                    <div style="text-transform:uppercase;" class="col-md-10">
                        {{ Session::get('industry_skill')}}
                    </div>
                </div>

                <div class="mt-5 row" style="font-size:12px;">
                    <span style="color:#C71585" class="col-md-2"> <strong> WORK EXPERIENCE </strong></span>
                    <div style="" class="col-md-10">
                        @for($i=0; $i<count(Session::get('work_title')); $i++)
                            <strong style="text-transform:capitalize"> {{ Session::get('work_title')[$i] }} </strong> <br>
                            <strong style="text-transform:capitalize; color:#C71585"> {{ Session::get('company')[$i] }} </strong> <br>
                            <i style="color:#C71585" class="fas fa-calendar mr-1"></i>
                            {{ Carbon\Carbon::parse(Session::get('date_from')[$i])->format('F Y') }} -

                            @if (Session::get('date_to')[$i])
                            {{ Carbon\Carbon::parse(Session::get('date_to')[$i])->format('F Y') }}
                            @else
                            Present
                            @endif
                            <br>
                            @php
                                $task = explode("\r", Session::get('tasks')[$i]);
                            @endphp
                                <ul>
                                    @foreach ($task as $item)
                                    <li> {{$item}} </li>
                                    @endforeach
                                </ul>
                        @endfor
                    </div>
                </div>

                <div class="mt-5 row" style="font-size:12px;">
                    <span style="color:#C71585" class="col-md-2"> <strong> EDUCATION </strong></span>
                    <div style="" class="col-md-10">
                        @for($i=0; $i<count(Session::get('degree')); $i++)
                            <span style="text-transform:capitalize"> <strong> {{ Session::get('degree')[$i] }} </strong>,  {{ Session::get('course')[$i] }} </span><br>
                            <span style="text-transform:capitalize; color:#C71585"> {{ Session::get('institution')[$i] }} </span> <br>
                            <i style="color:#C71585" class="fas fa-calendar mr-1"></i>
                            {{ Carbon\Carbon::parse(Session::get('year_ended')[$i])->format('Y') }}
                            <br>
                        @endfor
                    </div>
                </div>

                <div class="mt-5 row" style="font-size:12px;">
                    <span style="color:#C71585" class="col-md-2"> <strong> CERTIFICATIONS </strong></span>
                    <div style="" class="col-md-10">
                        @for($i=0; $i<count(Session::get('cert_title')); $i++)
                            <strong style="text-transform:capitalize"> {{ Session::get('cert_title')[$i] }} </strong> <br>
                            <strong style="text-transform:capitalize; color:#C71585"> {{ Session::get('cert_link')[$i] }} </strong> <br>
                            <span style="text-transform:capitalize;"> {{ Session::get('corporation')[$i] }},
                                {{ Session::get('cert_year')[$i] }} </span> <br>
                        @endfor
                    </div>
                </div>


            </div>

        </div>

        <script>
            function generatePDF() {
              // Choose the element that our invoice is rendered in.
              const element = document.getElementById("container");
              // Choose the element and save the PDF for our user.
              html2pdf()
                .from(element)
                .save();
            }
        </script>
    </body>
</html>

