<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('admin/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('admin/bower_components/datatables-responsive/css/dataTables.responsive.css')}}"
          rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{url('images/icon.png')}}"/>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{url('js/jquery.flexdatalist.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('js/jquery.flexdatalist.min.js')}}"></script>
    <link href="http://projects.sergiodinislopes.pt/flexdatalist/src/jquery.flexdatalist.css?1.8.5" rel="stylesheet"
          type="text/css">
</head>
<body>
    <form id="add" action="{{route('upload.part7')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <h3 class="text-center" style="color: black;margin-top: 10px; font-size: xx-large">Part 7</h3>
            @if (session('message'))
                <div class="alert alert-success" style="text-align: center; font-size: large">
                    <strong>Success!</strong> {{session('message')}}
                </div>
            @endif



            <button type="submit" id="finish" class="btn btn-outline-primary"
                    style="display: block; margin: auto; float: right; font-size: large">Upload <i class="fa fa-upload"></i>
            </button>

            {{--<input type="button" id="btn2" class="btn" value="Add Question">--}}
            <button type="button" id="btn2" class="btn btn-outline-primary" style="font-size: large">Add Question
                <i class="fa fa-plus-square"></i>
            </button>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <div class="col-lg-12 ">

            <h3 class="text-center" style="color: black;margin-top: 10px">1</h3>
            <div class="panel-body" style="margin-top: 1px">
                <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                    <label>Image</label>
                    <input type="file" class="form-control" name="images[]"/>
                </div>
                <div class="col-lg-6 ">
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Question 1</label>
                        <input class="form-control" name="question_1[]" placeholder="Please Enter Question" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer A</label>
                        <input class="form-control" name="answer_1_A[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer B</label>
                        <input class="form-control" name="answer_1_B[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer C</label>
                        <input class="form-control" name="answer_1_C[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer D</label>
                        <input class="form-control" name="answer_1_D[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Correct Answer</label>
                        <input class="form-control" name="correct_answer_1[]" placeholder="Please Enter Correct Answer" />

                    </div>

                </div>
                <div class="col-lg-6 ">
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Question 2</label>
                        <input class="form-control" name="question_2[]" placeholder="Please Enter question" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer A</label>
                        <input class="form-control" name="answer_2_A[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer B</label>
                        <input class="form-control" name="answer_2_B[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer C</label>
                        <input class="form-control" name="answer_2_C[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Answer D</label>
                        <input class="form-control" name="answer_2_D[]" placeholder="Please Enter Answer" />

                    </div>
                    <div class="form-group" style="margin-top: 1px;margin-bottom: 5px">
                        <label>Correct Answer</label>
                        <input class="form-control" name="correct_answer_2[]" placeholder="Please Enter Correct Answer" />

                    </div>

                </div>



        </div>

        {{--<div id ="add">11</div>--}}



        <script>
            $(document).ready(function () {
                var i = 2;
                var j = 3;
                $("#btn2").click(function () {

                    $("#add").append(" <div class=\"col-lg-6 \">\n" +
                        "\n" +
                        "            <h3 class=\"text-center\" style=\"color: black;margin-top: 10px\">"+(i++)+"</h3>\n" +
                        "            <div class=\"panel-body\" style=\"margin-top: 1px\">\n" +
                        "                <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                    <label>Image</label>\n" +
                        "                    <input type=\"file\" class=\"form-control\" name=\"image[]\"/>\n" +
                        "                </div>\n" +
                        "                <div class=\"col-lg-6 \">\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Question  "+(j++)+"</label>\n" +
                        "                        <input class=\"form-control\" name=\"question_1[]\" placeholder=\"Please Enter Question\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer A</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_1_A[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer B</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_1_B[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer C</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_1_C[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer D</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_1_D[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Correct Answer</label>\n" +
                        "                        <input class=\"form-control\" name=\"correct_answer_1[]\" placeholder=\"Please Enter Correct Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "\n" +
                        "                </div>\n" +
                        "                <div class=\"col-lg-6 \">\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Question "+(j++)+"</label>\n" +
                        "                        <input class=\"form-control\" name=\"question_2[]\" placeholder=\"Please Enter question\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer A</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_2_A[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer B</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_2_B[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer C</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_2_C[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Answer D</label>\n" +
                        "                        <input class=\"form-control\" name=\"answer_2_D[]\" placeholder=\"Please Enter Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "                    <div class=\"form-group\" style=\"margin-top: 1px;margin-bottom: 5px\">\n" +
                        "                        <label>Correct Answer</label>\n" +
                        "                        <input class=\"form-control\" name=\"correct_answer_2[]\" placeholder=\"Please Enter Correct Answer\" />\n" +
                        "\n" +
                        "                    </div>\n" +
                        "\n" +
                        "                </div>\n" +
                        "\n" +
                        "\n" +
                        "\n" +
                        "        </div>");
                });
                // $("#add_question").click(function () {
                //     $("#answer").append("\n" +
                //         "                                                <div class=\"form-group\"style=\"margin-top: 1px;margin-bottom: 5px\" id=\"answer\">\n" +
                //         "\n" +
                //         "                                                    <label>Correct Answer </label>\n" +
                //         "                                                    <input type=\"button\" id=\"add_question\" style=\"float: right\" value=\"+\" >\n" +
                //         "                                                    <div>\n" +
                //         "                                                    <input class=\"form-control\"  name=\"correct_answer\"\n" +
                //         "                                                           placeholder=\"Please Enter Correct Answer\"/>\n" +
                //         "\n" +
                //         "\n" +
                //         "                                                    </div>")
                // });

            });
        </script>

    </form>
</body>
