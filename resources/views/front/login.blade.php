@extends('layout.front.app')
@section('content')

<div id="wrap">
    <div id="sub_banner" class="gradient">
        <div class="container">
            <div class="sub_banner">
                <h1>Student Section</h1>
                <div class="breadcumb">
                    <ul>
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="Student">Student</a></li>                            
                        <li>Login | Registger</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>        
    <div id="content">
        <div class="login">
            <div class="container">
                <div class="block">
                    <div class="title">
                        <strong>Login -</strong> Here
                    </div>
                    <form method="POST" autocomplete="off" name="registerForm" id="registerForm" action= "{{route('login')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form">
                            <div class="sub_row">
                                <label class="label">E-mail *</label>
                                <input type="text" class="input_text" placeholder="e.g. John Smith" name="email">
                            </div>
                            <div class="sub_row relative">
                                <label class="label">Password *</label>
                                <input type="text" class="input_text" placeholder="e.g. John Smith" name="password">
                                <div class="view_password"><a href="#" title=""></a></div>
                            </div>
                            <div class="sub_row">
                                <div class="forgot"><a href="#" title="Forgot Password?">Forgot Password?</a></div>
                            </div>
                            <div class="sub_row">
                                <div class="submit">
                                    <input type="submit" class="btn" value="Login">
                                </div>
                            </div>       
                        </div>
                    </form>
                </div>
                <div class="block">
                    <div class="title dark">
                        <strong>Welcome!</strong> Register Here
                    </div>
                    <form method="POST" autocomplete="off" name="registerForm" id="registerForm" action= "{{route('registger')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="form">
                            <div class="sub_row">
                                <div class="columns clearfix">
                                    <div class="col">
                                        <label class="label">Name *</label>
                                        <input type="text" class="input_text" placeholder="e.g. John Smith" name="name">
                                    </div>
                                    <div class="col">
                                        <label class="label">Contact No. *</label>
                                        <input type="text" class="input_text" placeholder="e.g. +91 00000 00000" name="contact">
                                    </div>                                   
                                </div>
                            </div>
                            <div class="sub_row">
                                <div class="columns clearfix">
                                    <div class="col">
                                        <label class="label">Email ID *</label>
                                        <input type="text" class="input_text" placeholder="e.g. john@emailaddress.com" name="email">
                                    </div>
                                    <div class="col">
                                        <label class="label">Password *</label>
                                        <input type="text" class="input_text" placeholder="0-9a-z" name="password">
                                    </div>                                    
                                </div>
                            </div>
                            <div class="sub_row">
                                <div class="submit">
                                    <input type="submit" class="btn dark" value="Get Register">
                                </div>
                            </div>                                                                                      
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <div class="login">
            <div class="container">
                <div class="block">
                    <div class="title"><strong>Teacher -</strong> Login Here</div>
                    <div class="form">
                        <div class="sub_row">
                            <label class="label">User ID *</label>
                            <input type="text" class="input_text" placeholder="e.g. John Smith">
                        </div>
                        <div class="sub_row relative">
                            <label class="label">Password *</label>
                            <input type="text" class="input_text" placeholder="e.g. John Smith">
                            <div class="view_password"><a href="#" title=""></a></div>
                        </div>
                        <div class="sub_row">
                            <div class="forgot"><a href="#" title="Forgot Password?">Forgot Password?</a></div>
                        </div>
                        <div class="sub_row">
                            <div class="submit">
                                <input type="submit" class="btn" value="Login">
                            </div>
                        </div>                                                                                            
                    </div>
                </div>
                <div class="block">
                    <div class="title dark"><strong>Welcome!</strong> Register Here</div>
                    <div class="form">
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">Frist Name *</label>
                                    <input type="text" class="input_text" placeholder="e.g. John Smith">
                                </div>
                                <div class="col">
                                    <label class="label">Last Name *</label>
                                    <input type="text" class="input_text" placeholder="e.g. John Smith">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">Email ID *</label>
                                    <input type="text" class="input_text" placeholder="e.g. john@emailaddress.com">
                                </div>
                                <div class="col">
                                    <label class="label">Contact No. *</label>
                                    <input type="text" class="input_text" placeholder="e.g. +91 00000 00000">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">Qualification *</label>
                                    <input type="text" class="input_text" placeholder="e.g. MBA">
                                </div>
                                <div class="col">
                                    <label class="label">Yrs. of Experience *</label>
                                    <input type="text" class="input_text" placeholder="e.g. 5+ Years">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">Address Line 1 *</label>
                                    <input type="text" class="input_text" placeholder="e.g. 1302, Shivalik II, Opp. ITC Narmada">
                                </div>
                                <div class="col">
                                    <label class="label">Address Line 2</label>
                                    <input type="text" class="input_text" placeholder="e.g. Nr. Keshavbaug, Vastrapur">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">City *</label>
                                    <input type="text" class="input_text" placeholder="e.g. Ahmedabad">
                                </div>
                                <div class="col">
                                    <label class="label">Zip / Postal *</label>
                                    <input type="text" class="input_text" placeholder="e.g. 380015">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <div class="columns clearfix">
                                <div class="col">
                                    <label class="label">State *</label>
                                    <input type="text" class="input_text" placeholder="e.g. Gujarat">
                                </div>
                                <div class="col">
                                    <label class="label">Country *</label>
                                    <input type="text" class="input_text" placeholder="e.g. India">
                                </div>                                    
                            </div>
                        </div>
                        <div class="sub_row">
                            <label class="check_radio_label check_label" for="check_2">
                                <input type="checkbox" name="check_2" class="checkbox" id="check_2">I agree to <a href="#" title="T&C">T&amp;C</a> of the website.
                            </label>
                        </div>
                        <div class="sub_row">
                            <div class="submit">
                                <input type="submit" class="btn dark" value="Get Register">
                            </div>
                        </div>                                                                                            
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="login">
            <div class="container">
                <div class="center">
                    <p>Enter Email ID that you used at the time of registration. We Will send you email with security code to rest password.</p>
                    <div class="form">
                        <div class="sub_row">
                            <i>Enter Registered Email ID</i>
                        </div>
                        <div class="sub_row">
                            <label class="label">Email ID *</label>
                            <input type="text" class="input_text" placeholder="e.g. john@emailaddress.com">
                        </div>
                        <div class="sub_row">
                            <div class="submit">
                                <input type="submit" class="btn" value="Send">
                            </div>
                        </div>                                                                                            
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="login">
            <div class="container">
                <div class="center">
                    <p>Enter Email ID that you used at the time of registration. We Will send you email with security code to rest password.</p>
                    <div class="form">
                        <div class="sub_row">
                            <i>Enter Code send on your Registered Email</i>
                        </div>
                        <div class="sub_row">
                            <input type="text" class="input_text disabled" placeholder="student@abc.com" disabled>
                        </div>
                        <div class="sub_row">
                            <label class="label">Enter Code *</label>
                            <input type="text" class="input_text" placeholder="e.g. 123456">
                        </div>
                        <div class="sub_row">
                            <div class="submit">
                                <input type="submit" class="btn" value="Submit">
                            </div>
                        </div>                                                                                            
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/login.js') }}"></script>
<script src="js/checkbox-radio.js"></script>
@endsection
@endsection
