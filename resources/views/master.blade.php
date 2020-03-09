<!DOCTYPE html>
<html lang="en">
@include('includes.header_link')
<body>
@include('includes.top_bar')
@include('includes.navbar')
<section class="content">
    @yield('content')
</section>
@include('includes.footer')
<!--        ***************seminar model start*************-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Sign Up for free Seminar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="/action_page.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="email" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="password" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" class="form-control"  placeholder="Date of Birth:" required>
                    </div>

                    <div class="form-group">
                        <label>Phone No:</label>
                        <input type="text" class="form-control"  placeholder="Phone No:" required>
                    </div>
                    <div class="form-group">
                        <label>Nationality:</label>
                        <input type="text" class="form-control"  placeholder="Nationality" required>
                    </div>
                    <div class="form-group">
                        <label>Current Visa Status:</label>
                        <input type="text" class="form-control"  placeholder="Current Visa Status" required>
                    </div>
                    <div class="form-group">
                        <label>Current Visa Expire Date:</label>
                        <input type="date" class="form-control"  placeholder="Current Visa Expire Date" required>
                    </div>
                    <div class="form-group">
                        <label>Passport Expire Date:</label>
                        <input type="date" class="form-control"  placeholder="Passport Expire Date:" required>
                    </div>
                    <div class="form-group">
                        <label>Country of resident:</label>
                        <input type="text" class="form-control"  placeholder="Country of resident" required>
                    </div>
                    <div class="form-group">
                        <label>Country like to visa:</label>
                        <input type="text" class="form-control"  placeholder="Country like to visa" required>
                    </div>
                    <div class="form-group">
                        <label>Highest level of education:</label>
                        <input type="text" class="form-control"  placeholder="Highest level of education" required>
                    </div>
                    <div class="form-group">
                        <label>English language ability</label>
                        <input type="text" class="form-control"  placeholder="English language ability" required>
                    </div>
                    <div class="form-group">
                        <label>Purpose of visit</label>
                        <input type="text" class="form-control"  placeholder="Purpose of visit" required>
                    </div>
                    <div class="form-group">
                        <label>Your Comments</label>
                        <input type="text" class="form-control"  placeholder="Purpose of visit" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--        **************seminar model end *********-->
<!--        *************** student Modal start*************-->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Student Application</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="/action_page.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" id="email" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="password" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <input type="date" class="form-control"  placeholder="Date of Birth:" required>
                    </div>

                    <div class="form-group">
                        <label>Phone No:</label>
                        <input type="text" class="form-control"  placeholder="Phone No:" required>
                    </div>
                    <div class="form-group">
                        <label>Nationality:</label>
                        <input type="text" class="form-control"  placeholder="Nationality" required>
                    </div>
                    <div class="form-group">
                        <label>Current Visa Status:</label>
                        <input type="text" class="form-control"  placeholder="Current Visa Status" required>
                    </div>
                    <div class="form-group">
                        <label>Current Visa Expire Date:</label>
                        <input type="date" class="form-control"  placeholder="Current Visa Expire Date" required>
                    </div>
                    <div class="form-group">
                        <label>Passport Expire Date:</label>
                        <input type="date" class="form-control"  placeholder="Passport Expire Date:" required>
                    </div>
                    <div class="form-group">
                        <label>Country of resident:</label>
                        <input type="text" class="form-control"  placeholder="Country of resident" required>
                    </div>
                    <div class="form-group">
                        <label>Country like to visa:</label>
                        <input type="text" class="form-control"  placeholder="Country like to visa" required>
                    </div>
                    <div class="form-group">
                        <label>Highest level of education:</label>
                        <input type="text" class="form-control"  placeholder="Highest level of education" required>
                    </div>
                    <div class="form-group">
                        <label>English language ability</label>
                        <input type="text" class="form-control"  placeholder="English language ability" required>
                    </div>
                    <div class="form-group">
                        <label>Purpose of visit</label>
                        <input type="text" class="form-control"  placeholder="Purpose of visit" required>
                    </div>
                    <div class="form-group">
                        <label>Your Comments</label>
                        <input type="text" class="form-control"  placeholder="Purpose of visit" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--        ************** student Modal end *********-->


<script>

    $(document).ready(function(){
        $(window).bind('scroll', function() {
            var navHeight = $('.top_bar').height();
            if ($(window).scrollTop() > navHeight) {
                $('.nav-bar').addClass('fixed');
                $('.head_title').addClass('mar-top-3').removeClass('mt-3');
            }
            else {
                $('.nav-bar').removeClass('fixed');
                $('.head_title').removeClass('mar-top-3').addClass('mt-3');
            }
        });
    });

</script>

</body>
</html>
