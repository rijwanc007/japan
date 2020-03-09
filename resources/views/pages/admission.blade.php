@extends('master')
@section('title','admission')
@section('admission','active')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="head_title mb-3 text-center">Admission information</h2>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                    and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                    Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                    The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    Important information

                <ul>
                    <li>General guideline for those considering applying for the next intake</li>
                    <li>Entry requirements may vary from country to country and program to program. Most of the Institutes follow the UK NARIC, some are specified for certain Major subject</li>
                </ul>grades, duration of courses, Experience, English Language requirements and so on.
                Entry requirements may vary between English speaking country and non-English speaking countries and institute to institutes.
                We advise please book an appointment to know your entry requirements.</p>

                <h2 class="mb-3 text-center">Admission Form</h2>

                <a href="#" data-toggle="modal" class="btn btn-outline-danger mb-5" data-target="#myModal">Student Application Form</a>

                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                    which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                    middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated
                    Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                <h2 class="mt-3 mb-3 text-center">Exam Regulation</h2>
                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,
                    and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                    because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there
                    anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                    him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any
                    right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>

                <h2 class="mt-3 mb-3 text-center">Prospectus</h2>
                <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system,
                    and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                    because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there
                    anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure
                    him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any
                    right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
                <a href="https://pixabay.com/photos/almond-blossom-cherry-blossom-5378/" target="_blank" >Download Your Prospectus by Clicking here</a>
            </div>
        </div>
    </div>


    <!--        ***************Modal start*************-->
    <div class="modal fade" id="myModal" role="dialog">
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
    <!--        **************Modal end *********-->
@endsection
