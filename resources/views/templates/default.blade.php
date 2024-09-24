<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>{{ $title }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" type="text/css">
    <style>
        html {
            font-family:arial;
            font-size: 18px;
        }

        td {
            border: 1px solid #726E6D;
            padding: 15px;
        }

        thead{
            font-weight:bold;
            text-align:center;
            background: #625D5D;
            color:white;
        }

        table {
            border-collapse: collapse;
            min-width: 500px;
        }

        .footer {
            text-align:right;
            font-weight:bold;
        }

        tbody >tr:nth-child(odd) {
            background: #D1D0CE;
        }


    </style>
</head>
<body>
{{--<h1>{{ $title }}</h1>
<table >
    <thead>
        <tr>
            @foreach(array_keys($data[0]) as $key)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            @foreach($row as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>--}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">


                <div class="container">
                    <div class="jumbotron">
                        <div class="text-center">
                            <h2 style="line-height: 0.6;">S C H O O L  &nbsp;  N A M E </h2>
                            <h4 style="line-height: 0.6;"><strong>CITY NAME</strong></h4>
                            <h4 style="line-height: 0.6;">STATEMENT OF MARKS</h4>
                            <span style="line-height: 0.6;">Y E A R</span>
                        </div>

                        <br>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-6" style="float: left;">
                                <label>Name :</label> <span id="Name" name="student_Name">Osman</span>
                                <br>
                                <label>Father Name :</label> <span id="FatherName" name="father_Name">Ertugrul</span>
                            </div>
                            <div class="col-sm-6" style="float: right;">
                                <label>Roll No :</label> <span id="rollNo" name="RollNumber">001</span>
                                <br>
                                <label>Class Name:</label> <span id="Class_Name" name="Class_Name">Turk</span>
                            </div>

                        </div>
                        <br>
                        <br>




                        <table width="100%">
                            <thead>
                            <tr>
                                <td colspan="3">SUBJECTS </td>
                                <td colspan="2"> GRADE </td>
                            </tr>
                            <tr>
                                <td>Code </td>
                                <td colspan="2"> Name </td>
                                <td> Letter </td>
                                <td> Points </td>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>CS 50 </td>
                                <td colspan="2">Intro To Computer Science </td>
                                <td> B+ </td>
                                <td> 9.99</td>
                            </tr>
                            <tr>
                                <td>MATH 225 </td>
                                <td colspan="2">Multi-Variable Calculus </td>
                                <td> A- </td>
                                <td> 10.98 </td>
                            </tr>


                            <tr>
                                <td>STAT 758 </td>
                                <td colspan="2">STATISTICS </td>
                                <td> A- </td>
                                <td> 10.98 </td>

                            </tr>

                            <tr>
                                <td>CS 373 </td>
                                <td colspan="2">Algorithms </td>
                                <td> B+ </td>
                                <td> 9.99</td>
                            </tr>

                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="3" class="footer">Total</td>
                                <td> 654 </td>
                                <td colspan="2">1200</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="footer">GRADE/PERCENTAGE</td>
                                <td colspan="3">3.73 / 4.0 </td>
                            </tr>
                        </table>


                        <br>

                        <br>
                        <div class="row text-center">
                            <div class="col-sm-6">

                                <br>
                                <p>PARENT SIGN</p>
                            </div>
                            <div class="col-sm-6">

                                <br>
                                <p>PRINCIPAL SIGNATURE</p>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>
</div>


<button onclick="printInvoice()">Print</button>
</body>
<script>
    let printInvoice = function() {
        window.print();
    };
</script>
</html>
