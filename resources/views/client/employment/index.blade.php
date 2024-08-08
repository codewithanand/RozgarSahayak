<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>व्यक्तिगत जानकारी फॉर्म</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">




</head>

<body>
    <main class="overflow-hidden">

        <!-- background -->
        <div class="main_bg">
            <!--<img src="assets/images/Bg.jpg" alt="Main Background"> -->
        </div>

        <!-- navbar -->
        <nav class="navbar">
            <div class="logo">
                <img style="height: 80px;" src="{{ asset('assets/images/logo.jpg') }}" alt="logo"><span></span>
            </div>
            <div class="socialIcons tab-none">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>

        </nav>

        <!-- rating & Slider -->
        <section class="rating_content">
            <div class="wrapper">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>शुक्रिया !</strong> आपका किमिति समय देने के लिए धन्यवाद
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>अलर्ट !</strong> फॉर्म सबमिट नहीं हुआ
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="col-md-7 tab-100 order-md-1 order-2 mainForm">
                        <!-- Feedback Form -->
                        <div class="productRating">
                            <div class="ratingHead">
                                <h2>व्यक्तिगत जानकारी फॉर्म</h2>
                            </div>
                            <form id="personalForm" action="{{ url('/user/register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- नाम और पिता का नाम -->
                                        <div class="form-group">
                                            <label for="name">आपका नाम </label>
                                            <input type="text" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="fathersName">आपके पिता का नाम</label>
                                            <input type="text" id="fathersName" name="fathersName" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- मोबाइल और ईमेल -->
                                        <div class="form-group">
                                            <label for="mobile">आपका मोबाइल नंबर </label>
                                            <input type="text" id="mobile" name="mobile" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="email">आपका ईमेल</label>
                                            <input type="text" id="email" name="email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- लिंग और ईमेल -->
                                        <div class="form-group">
                                            <label for="gender">लिंग</label>
                                            <select id="gender" name="gender" required>
                                                <option value="">चुनें...</option>
                                                <option value="male">पुरुष</option>
                                                <option value="female">स्त्री</option>
                                                <option value="other">कोई और</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="status">आप क्या काम करते हैं?</label>
                                            <input type="text" id="status" name="status" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12"> <!-- उम्र और योग्यता -->
                                        <div class="form-group">
                                            <label for="age"> आप 18 साल या उससे अधिक उम्र के हैं?</label>
                                            <select id="age" name="age" required>
                                                <option value="">चुनें...</option>
                                                <option value="yes">हाँ</option>
                                                <option value="no">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="qualification">आपकी सबसे उच्च शिक्षा</label>
                                            <input type="text" id="qualification" name="qualification" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12"> <!-- राज्य और जिला -->
                                        <div class="form-group">
                                            <label for="religion">आपका राज्य</label>
                                            <select id="state" name="state_code" placeholder="चुनें..." required>
                                                @foreach ($states as $state)
                                                    <option value="{{ $state->state_code }}">{{ $state->state_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="caste">आपका जिला</label>
                                            <select id="district" name="district_code" required>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12"> <!-- धर्म और जाति -->
                                        <div class="form-group">
                                            <label for="religion">आपका धर्म </label>
                                            <input type="text" id="religion" name="religion" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="caste">आपकी जाति </label>
                                            <input type="text" id="caste" name="caste" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- नौकरी का अनुभव -->
                                        <div class="form-group">
                                            <label for="jobExperience">आपके पास नौकरी का कोई अनुभव है?</label>
                                            <select id="jobExperience" name="jobExperience" required>
                                                <option value="">चुनें...</option>
                                                <option value="yes">हाँ</option>
                                                <option value="no">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12"><!-- राय -->
                                        <div class="form-group">
                                            <label for="govJobVsPrivate">आपको लगता है कि सरकारी नौकरी निजी नौकरी से
                                                बेहतर है?</label>
                                            <select id="govJobVsPrivate" name="govJobVsPrivate" required>
                                                <option value="">चुनें...</option>
                                                <option value="yes">हाँ</option>
                                                <option value="no">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="startupExperience">आपने कभी अपना खुद का व्यवसाय शुरू किया
                                                है?</label>
                                            <select id="startupExperience" name="startupExperience" required>
                                                <option value="">चुनें...</option>
                                                <option value="yes">हाँ</option>
                                                <option value="no">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="privateCompaniesRole">आपको लगता है कि निजी कंपनियाँ राज्य के
                                                विकास में योगदान करती हैं?</label>
                                            <select id="privateCompaniesRole" name="privateCompaniesRole" required>
                                                <option value="">चुनें...</option>
                                                <option value="yes">हाँ</option>
                                                <option value="no">नहीं</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">सबमिट करें</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-5 tab-100  order-md-2 order-1 mainSlider">
                        <!-- slider -->
                        <div id="heroSlider" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="slider_caption">

                                        <p class="headermsg">
                                            Welcome to Rozgar Sahayak
                                        </p>
                                        <h2 class="main-heading">
                                            Unlock Employment Insights with Rozgar Sahayak
                                        </h2>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slider_caption">
                                        <p class="headermsg">
                                            Welcome to Rozgar Sahayak
                                        </p>
                                        <h2 class="main-heading">
                                            Empowering Employment Decisions with Rozgar Sahayak
                                        </h2>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="slider_caption">
                                        <p class="headermsg">
                                            Welcome to Rozgar Sahayak
                                        </p>
                                        <h2 class="main-heading">
                                            Discover Employment Trends with Rozgar Sahayak
                                        </h2>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- slider indicators -->
                        <div class="sliderIndicators">
                            <button class="prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button class="next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- slider indicators -->
        {{-- <div class="sliderIndicators">
            <button class="prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div> --}}


        <!-- slider video -->


    </main>





    <!-- Bootstrap 5 -->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jQuery/jquery-3.6.4.min.js') }}"></script>

    <!-- My JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        var state = $('#state');
        var district = $('#district');

        populateDropdown('district', state.val(), district);

        state.change(function() {
            var stateCode = $(this).val();
            populateDropdown('district', stateCode, district);
        });

        function populateDropdown(type, code, dropdown) {
            $.ajax({
                url: 'http://localhost:8000/api/address/' + type + '/' + code,
                type: 'GET',
                success: function(response) {
                    var options = '<option value="">चुनें...</option>';
                    $.each(response, function(key, value) {
                        options += '<option value="' + value[type + '_code'] + '">' + value[
                            type + '_name'] + '</option>';
                    });
                    dropdown.html(options);
                },
                error: function(xhr, status, error) {
                    console.error('Failed to load ' + type + 's. Error: ' + error);
                }
            });
        }
    </script>
</body>

</html>
