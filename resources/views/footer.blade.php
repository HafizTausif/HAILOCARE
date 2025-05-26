<footer id="footer">
    <div class="container" id="hailc">
        <div class="foot">
            <h2>HailoCare</h2>
            <button href="#" class="Bttn app">Download Our App</button>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="footers">
            <div class="row justify-content-space-between align-items-start">
                
            <div class="col-md-3 col-6">
                    <h3>About HailoCare</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum aliquet accumsan porta
                        lectus ridiculus in mattis. Netus sodales.</p>
                    <div class="icons">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
     
                <div class="col-md-3 col-6">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('pricing') }}">Price Plan</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

         
                <div class="col-md-3 col-6 mt">
                    <h3 class="help-footers">Help</h3>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h3 class="help-footers">Contact</h3>
                    <ul>
                        <li><a href="mailto:info@hailocare.com">info@hailocare.com</a></li>
                        <li><a href="http://www.hailocare.com" target="_blank">www.hailocare.com</a></li>
                        <li><a href="tel:+000000000">+00 000 0000</a></li>
                    </ul>
                </div>

            </div>

            <h6 class="mt-4">© HailoCare 2025, All Rights Reserved</h6>
        </div>
    </div>
</footer>























<script src="{{ url('public/assests/js/bootstrap.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


<script>
const toggle = document.getElementById("billing-toggle");
const monthly = document.getElementById("monthly");
const annually = document.getElementById("annually");
const monthlyLabel = document.getElementById("monthly-label");
const annuallyLabel = document.getElementById("annually-label");

toggle.addEventListener("change", () => {
    if (toggle.checked) {
        monthly.classList.add("active");
        annually.classList.remove("active");
        monthlyLabel.classList.add("active");
        annuallyLabel.classList.remove("active");
    } else {
        monthly.classList.remove("active");
        annually.classList.add("active");
        monthlyLabel.classList.remove("active");
        annuallyLabel.classList.add("active");
    }
});
</script>


<script>
    function switchRole(roleId, btn) {
        // Toggle buttons
        document.querySelectorAll('.btn-role').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Toggle content
        document.querySelectorAll('.role-content').forEach(section => {
            section.classList.remove('active');
        });
        document.getElementById(roleId).classList.add('active');
    }
</script>



</body>

</html>