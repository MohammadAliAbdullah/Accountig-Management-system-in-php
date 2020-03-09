<?php
require "source/top.php";
require "source/header.php";
require "source/sidebar.php";
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
      <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
  </div>


  <!-- sample  -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="card-body">
                  <div class="card-content">
                    <div class="row">
                      <div class="col-md-8">
                        <div style="border:1px solid #d1d1d1; padding:10px; background-color: #f0efef99;">
                          <h2 style="background-color: #dbdbdb;
padding: 10px 10px 10px 10px;">Personal Information</h2>
                          <hr>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" id="name" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Date of Birth</label>
                                <!--                                                <input type="text" id="dob" class="form-control">-->
                                <input type="text" class="form-control" data-date-format="dd/mm/yyyy" id="dob">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input type="text" id="phone" class="form-control" onkeypress="return onlyNumbers();">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Email (if any)</label>
                                <input type="text" id="email" class="form-control">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Fathers Name</label>
                                <input type="text" id="f_name" class="form-control">
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Mothers Name</label>
                                <input type="text" id="m_name" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-4 text-center">
                        <div style="border:1px solid #d1d1d1; padding:10px; background-color: #f0efef99;">
                          <h2 style="background-color: #dbdbdb;
padding: 10px 10px 10px 10px;">Student's Photo</h2>
                          <div>
                            <div class="row text-center">
                              <div class="col-md-12 text-center">
                                <div id="upload-demo"></div>
                              </div>
                            </div>
                            <div class="row text-center">
                              <div class="col-md-12 text-center">
                                <input type="file" id="upload">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div style="border:1px solid #d1d1d1;padding:10px; background-color: #f0efef99; margin-top:20px;">
                          <div class="row">
                            <div class="col-md-12">
                              <h2 style="background-color: #dbdbdb;
padding: 10px 10px 10px 10px;">Course Information</h2>
                            </div>
                          </div>
                          <hr>

                          <div class="row">
                            <div class="col-md-3" style="display: none;">
                              <div class="form-group">
                                <label class="control-label">Branch</label>
                                <select class="form-control" id="branch" disabled=true;>
                                  <option value="">--ALL--</option>


                                  <option value="45" selected>110</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Session</label>
                                <select class="form-control" id="session">
                                  <option value="">--Select One--</option>
                                  <option value="2">January-June</option>
                                  <option value="3">July-December</option>
                                  <option value="6">January-December</option>
                                  <option value="7">April-June</option>
                                  <option value="8">July-September</option>
                                  <option value="9">October-December</option>
                                  <option value="10">January-March</option>
                                  <option value="11">-</option>
                                  <option value="13">July-June</option>
                                  <option value="14">-</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Trade/Technology</label>
                                <select class="form-control" id="trade">
                                  <option value="">--Select One--</option>
                                  <option value="7">Computer Office Application</option>
                                  <option value="8">Database Programming</option>
                                  <option value="9">Diploma in Computer Science</option>
                                  <option value="10">Diploma in ICT</option>
                                  <option value="11">Diploma in Multilingual Secretarial Science</option>
                                  <option value="18">Graphic Design</option>
                                  <option value="24">Higher Diploma in Computer Science</option>
                                  <option value="26">Web Design & Development</option>
                                  <option value="27">WordPress </option>
                                  <option value="28">Diploma in Electric & Electronic Technology</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Medium</label>
                                <select class="form-control" id="medium">
                                  <option value="">--Select One--</option>
                                  <option value="2">Bangla</option>
                                </select>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select class="form-control" id="gender">
                                  <option value="">--Select One--</option>
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Religion</label>
                                <select class="form-control" id="religion">
                                  <option value="">--Select One--</option>
                                  <option value="1">Islam</option>
                                  <option value="2">Hinduism</option>
                                  <option value="3">Christianity</option>
                                  <option value="4">Buddhism</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Nationality</label>
                                <select class="form-control" id="nationality">
                                  <option value="">--Select One--</option>
                                  <option value="1">Bangladeshi</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">Blood Group</label>
                                <select class="form-control" id="b_group">
                                  <option value="">--Select One--</option>
                                  <option value="A+">A+</option>
                                  <option value="B+">B+</option>
                                  <option value="AB+">AB+</option>
                                  <option value="O+">O+</option>
                                  <option value="A-">A-</option>
                                  <option value="B-">B-</option>
                                  <option value="AB-">AB-</option>
                                  <option value="O-">O-</option>
                                  <option value="N/A">N/A</option>
                                </select>
                              </div>
                            </div>
                          </div>



                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div style="border:1px solid #d1d1d1;padding:10px; background-color: #f0efef99; margin-top:20px;">
                          <div class="row">
                            <div class="col-md-12">
                              <h2 style="background-color: #dbdbdb;
padding: 10px 10px 10px 10px;">Academic Information</h2>
                            </div>
                          </div>
                          <hr>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">JSC Board</label>
                                <select class="form-control" id="jsc_board">
                                  <option value="">--Select One--</option>
                                  <option value="2">Dhaka</option>
                                  <option value="3">Jashore</option>
                                  <option value="4">Comilla </option>
                                  <option value="5">Barishal</option>
                                  <option value="6">Chittagong</option>
                                  <option value="7">Dinajpur </option>
                                  <option value="8">Rajshahi </option>
                                  <option value="9">Sylhet</option>
                                  <option value="10">Madrasah</option>
                                  <option value="11">Technical</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">JSC Year</label>
                                <input type="text" id="jsc_year" class="form-control" onkeypress="return onlyNumbers();">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">JSC Roll</label>
                                <input type="text" id="jsc_roll" class="form-control" onkeypress="return onlyNumbers();">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">JSC Result</label>
                                <input type="text" id="jsc_result" class="form-control">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">SSC Board</label>
                                <select class="form-control" id="ssc_board">
                                  <option value="">--Select One--</option>
                                  <option value="2">Dhaka</option>
                                  <option value="3">Jashore</option>
                                  <option value="4">Comilla </option>
                                  <option value="5">Barishal</option>
                                  <option value="6">Chittagong</option>
                                  <option value="7">Dinajpur </option>
                                  <option value="8">Rajshahi </option>
                                  <option value="9">Sylhet</option>
                                  <option value="10">Madrasah</option>
                                  <option value="11">Technical</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">SSC Year</label>
                                <input type="text" id="ssc_year" class="form-control" onkeypress="return onlyNumbers();">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">SSC Roll</label>
                                <input type="text" id="ssc_roll" class="form-control" onkeypress="return onlyNumbers();">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="control-label">SSC Result</label>
                                <input type="text" id="ssc_result" class="form-control">
                              </div>
                            </div>

                          </div>


                        </div>
                      </div>
                    </div>


                    <hr>

                    <div class="row">
                      <div class="col-md-12 text-center">
                        <div class="form-group">
                          <button class="btn btn-success" id="submitButton">Submit</button>
                          <a class="btn btn-info" href="student_view.php">Student List</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- End PAge Content -->
        </div>
    <!-- All Jquery -->
    <script type="text/javascript" src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script type="text/javascript" src="js/lib/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script type="text/javascript" src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script type="text/javascript" src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script type="text/javascript" src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
    <script src="plugins/datepicker-plugin/datepicker.js"></script>

    <script src="js/lib/toastr/toastr.min.js"></script>

    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

    <script language="JavaScript">
      function onlyNumbers(evt) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;

        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;

        return true;

      }
    </script>

    <script type="text/javascript">
      var checkMsg = "";

      $uploadCrop = $('#upload-demo').croppie({
        enableExif: true,
        viewport: {
          width: 200,
          height: 200,
          type: 'square'
        },
        boundary: {
          width: 300,
          height: 225,
        }
      });


      $('#upload').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
          $uploadCrop.croppie('bind', {
            url: e.target.result
          }).then(function() {
            console.log('jQuery bind complete');
          });

        }
        reader.readAsDataURL(this.files[0]);
      });



      $('#submitButton').on('click', function(ev) {
        var d = new Date();
        var yearHere = d.getFullYear();
        var name = $('#name').val();
        var f_name = $('#f_name').val();
        var m_name = $('#m_name').val();
        var upload = $('#upload').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var branch = $('#branch').val();
        var session = $('#session').val();
        var dob = $('#dob').val();
        var gender = $('#gender').val();
        var trade = $('#trade').val();
        var religion = $('#religion').val();
        var nationality = $('#nationality').val();
        var b_group = $('#b_group').val();
        var medium = $('#medium').val();


        var jsc_board = $('#jsc_board').val();
        var jsc_year = $('#jsc_year').val();
        var jsc_roll = $('#jsc_roll').val();
        var jsc_result = $('#jsc_result').val();
        var ssc_board = $('#ssc_board').val();
        var ssc_year = $('#ssc_year').val();
        var ssc_roll = $('#ssc_roll').val();
        var ssc_result = $('#ssc_result').val();




        checkMsg = "";
        nullCheck(name, "Student Name");
        nullCheck(f_name, "Father Name");
        nullCheck(m_name, "Mother Name");
        nullCheck(upload, "Image");
        nullCheck(phone, "Phone Number");
        nullCheck(branch, "Branch Code");
        nullCheck(session, "Session");
        nullCheck(dob, "Date Of Birth");
        nullCheck(gender, "Gender");
        nullCheck(trade, "Trade");
        nullCheck(religion, "Religion");
        nullCheck(nationality, "Nationality");
        nullCheck(b_group, "Blood Group");
        nullCheck(medium, "Medium");


        if (jsc_roll == "" || ssc_roll == "") {
          if (jsc_roll == "") {
            nullCheck(ssc_board, "SSC Board");
            nullCheck(ssc_year, "SSC Year");
            nullCheck(ssc_roll, "SSC Roll");
            nullCheck(ssc_result, "SSC Result");
          } else if (ssc_roll == "") {
            nullCheck(jsc_board, "JSC Board");
            nullCheck(jsc_year, "JSC Year");
            nullCheck(jsc_roll, "JSC Roll");
            nullCheck(jsc_result, "JSC Result");
          } else {

          }
        }


        //            nullCheck(jsc_board, "JSC Board");
        //            nullCheck(jsc_year, "JSC Year");
        //            nullCheck(jsc_roll, "JSC Roll");
        //            nullCheck(jsc_result, "JSC Result");
        //            nullCheck(ssc_board, "SSC Board");
        //            nullCheck(ssc_year, "SSC Year");
        //            nullCheck(ssc_roll, "SSC Roll");
        //            nullCheck(ssc_result, "SSC Result");

        if (checkMsg == "") {
          $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
          }).then(function(resp) {

            $.ajax({
              url: "student_add_function.php",
              type: "POST",
              data: {
                "image": resp,
                "yearHere": yearHere,
                "name": name,
                "f_name": f_name,
                "m_name": m_name,
                "email": email,
                "phone": phone,
                "branch": branch,
                "session": session,
                "dob": dob,
                "gender": gender,
                "trade": trade,
                "religion": religion,
                "nationality": nationality,
                "b_group": b_group,
                "medium": medium,
                "jsc_board": jsc_board,
                "jsc_year": jsc_year,
                "jsc_roll": jsc_roll,
                "jsc_result": jsc_result,
                "ssc_board": ssc_board,
                "ssc_year": ssc_year,
                "ssc_roll": ssc_roll,
                "ssc_result": ssc_result,

              },
              success: function(data) {
                if (data == "false") {
                  unsuccessFun();
                } else {
                  successFun();
                  //alert(data);
                  var name = $('#name').val("");
                  var f_name = $('#f_name').val("");
                  var m_name = $('#m_name').val("");
                  var upload = $('#upload').val("");
                  var email = $('#email').val("");
                  var phone = $('#phone').val("");
                  var branch = $('#branch').val("");
                  var session = $('#session').val("");
                  var dob = $('#dob').val("");
                  var gender = $('#gender').val("");
                  var trade = $('#trade').val("");
                  var religion = $('#religion').val("");
                  var nationality = $('#nationality').val("");
                  var medium = $('#medium').val("");
                  var jsc_board = $('#jsc_board').val("");
                  var jsc_year = $('#jsc_year').val("");
                  var jsc_roll = $('#jsc_roll').val("");
                  var jsc_result = $('#jsc_result').val("");
                  var ssc_board = $('#ssc_board').val("");
                  var ssc_year = $('#ssc_year').val("");
                  var ssc_roll = $('#ssc_roll').val("");
                  var ssc_result = $('#ssc_result').val("");
                  checkMsg = "";
                }
              }
            });
          });
        } else {
          checkMsg = checkMsg.slice(0, -1);
          alert(checkMsg + " Can't be empty !");
        }


      });

      const picker = datepicker(document.querySelector('#dob'), {
        position: 'tr', // Top right.
        startDate: new Date(), // This month.
        startDay: 1, // Calendar week starts on a Monday.
        dateSelected: new Date(), // Today is selected.
        disabledDates: [new Date('1/1/2050'), new Date('1/3/2050')], // Disabled dates.
        minDate: new Date(1980, 5, 1), // June 1st, 2016.
        maxDate: new Date(2099, 0, 1), // Jan 1st, 2099.
        noWeekends: false, // Weekends will be selectable.
        formatter: function(el, date) {
          // This will display the date as `1/1/2017`.
          el.value = convertDate(date.toDateString("DD/MM/YYYY"));
        },
        onSelect: function(instance) {
          // Show which date was selected.
          console.log("this was " + instance.dateSelected);
        },
        onShow: function(instance) {
          console.log('Calendar showing.');
        },
        onHide: function(instance) {
          console.log('Calendar hidden.');
        },
        onMonthChange: function(instance) {
          // Show the month of the selected date.
          console.log(instance.currentMonthName);
        },
        customMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        customDays: ['S', 'M', 'T', 'W', 'Th', 'F', 'S'],
        overlayPlaceholder: 'Enter a 4-digit year',
        overlayButton: 'Go!',
        disableMobile: false // Conditionally disabled on mobile devices.
      });

      function convertDate(inputFormat) {
        function pad(s) {
          return (s < 10) ? '0' + s : s;
        }
        var d = new Date(inputFormat);
        return [pad(d.getDate()), pad(d.getMonth() + 1), d.getFullYear()].join('/');
      }



      function reloadPaageFunction() {
        document.location.reload(true);
      }

      function nullCheck(value, msg) {
        if (value == "") {
          checkMsg = checkMsg + msg + " /";
        }
      }


      function successFun() {
        toastr.success('', 'Successfull !', {
          "positionClass": "toast-bottom-center",
          timeOut: 3000,
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut",
          "tapToDismiss": false

        });
        reloadPaageFunction();
      }

      function unsuccessFun() {
        toastr.error('', 'Unsuccessfull !', {
          "positionClass": "toast-bottom-center",
          timeOut: 3000,
          "closeButton": true,
          "debug": false,
          "newestOnTop": true,
          "progressBar": true,
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut",
          "tapToDismiss": false

        });
      }

      $('#dob').val(r);
    </script>
  </body>

  </html>

  <!-- sample  -->
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Google analytics script-->
<script type="text/javascript">
  if (document.location.hostname == 'pratikborsadiya.in') {
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dashboard").addClass('active');
  });
</script>
</body>

</html>