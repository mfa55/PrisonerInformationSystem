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
                    <li><a href="#projectDescription">Project Description</a></li>
                    <li><a href="#mysqlDB">MySQL Database</a></li>
                    <li><a href="#querying">Querying</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container bg-3 text-center">
        <h3 class="margin" id="mysqlDB">MySQL Database</h3><br/>
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
CREATE TABLE `prisoner` (
  `SSN` bigint(20) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `entryDate` date DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phoneCallsAllowed` int(11) NOT NULL,
  `phoneNumber` bigint(20) NOT NULL,
  `prisonSentence` int(11) NOT NULL,
  `releaseDate` date DEFAULT NULL,
  `visitsAllowed` int(11) NOT NULL,
  `cellmateId` bigint(20) DEFAULT NULL,
  `locationId` int(11) DEFAULT NULL,
  PRIMARY KEY (`SSN`),
  KEY `FKc2up4amrqvaeh2b0u8ku4eenr` (`cellmateId`),
  KEY `FK6qbpj3f390v3s7oxlqbnqegyw` (`locationId`),
  CONSTRAINT `FK6qbpj3f390v3s7oxlqbnqegyw` FOREIGN KEY (`locationId`) REFERENCES `location` (`Id`),
  CONSTRAINT `FKc2up4amrqvaeh2b0u8ku4eenr` FOREIGN KEY (`cellmateId`) REFERENCES `prisoner` (`SSN`)
) ENGINE=InnoDB AUTO_INCREMENT=431434134135 DEFAULT CHARSET=latin1
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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
                                <pre><code class="sql">CREATE TABLE HALLAK();</code></pre>
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