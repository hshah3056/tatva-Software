<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker3.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="container">
            <div class="row">
                <form action="" method="post">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Event Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label for="">Start Time</label>
                            <input type="text" class="form-control" id="start_at" data-provide="datepicker" name="start_at" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">End Time</label>
                            <input type="text" class="form-control" id="end_at" data-provide="datepicker" name="end_at" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Repeat</label>
                                <input type="radio" name="type" value="repeat">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for=""></label>
                            <div class="form-group">
                                <select class="form-control" name="repeat_one">
                                    <option value=" ">Select</option>
                                    <option value="every">Every</option>
                                    <option value="every other">Every Other</option>
                                    <option value="every third">Every Third</option>
                                    <option value="every fourth">Every Fourth</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="repeat_two">
                                    <option value=" ">select</option>
                                    <option value="day">day</option>
                                    <option value="week">week</option>
                                    <option value="month">month</option>
                                    <option value="year">year</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Repeat On The</label>
                                <input type="radio" name="type" value="repeat_on">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="form-group">
                                    <select class="form-control" name="repeat_on_one">
                                        <option value=" ">Select</option>
                                        <option value="every">Every</option>
                                        <option value="first">First</option>
                                        <option value="second">Second</option>
                                        <option value="third">third</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="repeat_on_two">
                                        <option value=" ">Select</option>
                                        <option value="sun">sun</option>
                                        <option value="monday">monday</option>
                                        <option value="tuesday">Tuesday</option>
                                        <option value="wednesday">wednesday</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="repeat_on_three">
                                        <option value="">Select</option>
                                        <option value="monthly">Month</option>
                                        <option value="threemonth">3 month</option>
                                        <option value="sixmonth">6 month</option>
                                        <option value="twelvesday">12 month</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="submit" class="btn btn-success" value="submit">


                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-responsive">
                                <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Dates</th>
                                    <th>Occurrence</th>
                                    <th width="60%">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $key => $event)
                                    <tr id="data">
                                        <td>{{$key+1}}</td>
                                        <td>{{$event->title}}</td>
                                        <td>{{$event->start_at}}</td>
                                        <td>{{$event->end_at}}</td>
                                        @foreach(json_decode($event->recurrence)->type as $type)
                                            <td>{{$type == 1 ? implode(' ',json_decode($event->recurrence)->repeat) : implode(' ',json_decode($event->recurrence)->repeat_on)}}</td>
                                        @endforeach
                                        <td>
                                            <a href="{{route('event-view')}}" class="btn btn-primary btn-sm">View</a>
                                            <a href="{{route('event-update',['id' => $event->id])}}" class="btn btn-success btn-sm">update</a>

                                            <form action="{{route('event-delete',['id' => $event->id])}}" method="post">
                                                {{csrf_field()}}
                                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                {{ $events->links()}}
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="javascript">
    $(document).ready(function() {

        $( ".start_at" ).datepicker({
            format: 'dd-mm-yyyyy',
            autoclose: true
        });

        $('.end_at').datepicker({
            format: 'dd-mm-yyyyy',
            autoclose: true
        });

    });

</script>
