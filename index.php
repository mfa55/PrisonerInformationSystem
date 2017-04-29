<!DOCTYPE html>
<html
        xmlns="http://www.w3.org/1999/xhtml"
        xmlns:th="http://www.thymeleaf.org"
        xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
        xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity4" lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Prisoner IS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="Mohamad Hallak" />

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendor/dracula/dracula.css">
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div class="container-fluid bg-1 text-center">
        <h1 class="margin">Prisoner Information System</h1>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <ul class="nav">
                    <li><a href="#projectDescription">Project</a></li>
                    <li><a href="#mysqlDB">MySQL Database</a></li>
                    <li><a href="#querying">Querying</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container bg-3 text-center">
        <h3 class="margin" id="projectDescription">Project</h3>
        <p>This project serves as a Prisoner Information System, it allows the execution of any query on our database which holds all the information about each criminal, his cellmate, the location of their cell, the staff and the external visitors.</p>
        <br/>
        <h3 class="margin" id="mysqlDB">MySQL Database</h3>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <p>Prisoner</p>

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#prisonerModal">Details</button>

                <div id="prisonerModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table PRISONER
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   SSN                  int not null,
   LOCATIONID           int not null,
   CELLMATEID           int,
   PRISONSENTENCE       int not null,
   ENTRYDATE            datetime not null,
   ADDRESS              varchar(100),
   CELLNUMBER           int not null,
   PHONENUMBER          int,
   PHONECALLSALLOWED    int not null,
   VISITSALLOWED        int not null,
   RELEASEDATE          datetime not null,
   BIRTHDATE            datetime not null,
   primary key (SSN)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p>Location</p>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#locationModal">Details</button>

                <div id="locationModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table LOCATION
(
   LOCATIONID           int not null,
   NAME                 varchar(50) not null,
   primary key (LOCATIONID)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p>Staff</p>

                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#staffModal">Details</button>

                <div id="staffModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table STAFF
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   SSN                  int not null,
   MANAGERID            int,
   LOCATIONID           int,
   ADDRESS              varchar(100),
   GENDER               varchar(10) not null,
   BIRTHDATE            datetime not null,
   primary key (SSN)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-4">
                <p>Crime</p>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crimeModal">Details</button>

                <div id="crimeModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table CRIME
(
   CRIMEID              int not null,
   SSN                  int,
   CRIMETYPE            varchar(20) not null,
   LEVEL                int not null,
   VICTIMID             int not null,
   CRIMEDATE            timestamp not null,
   primary key (CRIMEID)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p>Victim</p>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#victimModal">Details</button>

                <div id="victimModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table VICTIM
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   VICTIMID             int not null,
   BIRTHDATE            timestamp,
   primary key (VICTIMID)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p>Visitor</p>

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#visitorModal">Details</button>

                <div id="visitorModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table VISITOR
(
   FIRSTNAME            varchar(20) not null,
   LASTNAME             varchar(20) not null,
   GENDER               varchar(10) not null,
   VISITORID            int not null,
   BIRTHDATE            datetime not null,
   primary key (VISITORID)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">

            <div class="col-md-4">
                <p>Visit</p>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#visitModal">Details</button>

                <div id="visitModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Table Schema</h4>
                            </div>
                            <div class="modal-body">
                                <pre><code class="sql">
create table VISIT
(
   VISITORID            int not null,
   PRISONERSSN          int not null,
   VISITDATE            datetime not null,
   VISITID              int not null,
   primary key (VISITID)
);
                                    </code></pre>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />

    <div class="container-fluid bg-2 text-center">
        <h3 class="margin" id="querying">Querying</h3>
        <div class="container">
            <div class="row">
                <div class="form-group">
                    <textarea id="enteredQuery" class="sql form-control queryArea" rows="5"></textarea>
                    <br>
                    <button type="button" class="btn btn-md pull-right run-button" data-toggle="modal" data-target="#queryResultModal">Execute</button>
                </div>


                <div id="queryResultModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Query Results</h4>
                            </div>
                            <div class="modal-body queryResultBody">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>