 <!-- Header-->
 <!-- <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header> -->
<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
            <div class="card-body">
                <h4>Contact Form</h4>
            </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>
<!-- Header -->
<header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">Contact Us</h1>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="card-body">
                    <h4>Contact Form</h4>
                    <form action="submit_contact_form.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if ($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        } else {
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple')
        }
    });
    $(function() {
        $(document).trigger('scroll')
    });
</script>
