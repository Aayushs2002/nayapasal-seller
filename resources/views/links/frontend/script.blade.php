@include("links.commonscript")


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>


<script>
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
        // document.querySelector(".sidebar").classList.remove("hidden");

    }
    openSidebar();
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById('searchForm');
        var input = document.getElementById('search');

        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                form.submit();
            }
        });
    });
</script>


<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });
</script>


{{-- seller register  --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const nextButton = document.getElementById("next-button");
        const personalInfo = document.getElementById("personalinfo");
        const companyInfo = document.getElementById("companyinfo");
        const companyDocument = document.getElementById("companydocument");

        const previousButton = document.getElementById("previous-button");
        const previousButton2 = document.getElementById("previous-button2");
        const nextButton2 = document.getElementById("next-button2");



        nextButton.addEventListener("click", function() {
            console.log("object")
            personalInfo.classList.add("hidden");
            companyInfo.classList.remove("hidden");
        });

        previousButton.addEventListener("click", function() {
            companyInfo.classList.add("hidden");
            personalInfo.classList.remove("hidden");
        });

        nextButton2.addEventListener("click", function() {
            companyInfo.classList.add("hidden");
            personalInfo.classList.add("hidden");
            companyDocument.classList.remove("hidden");

        });
        previousButton2.addEventListener("click", function() {
            companyInfo.classList.remove("hidden");
            companyDocument.classList.add("hidden");
        });
    });
    document.querySelector('form').addEventListener('submit', function(event) {
        console.log('Form submitted');
    });
</script>



<script>
    async function sendOTPByEmail() {
        event.preventDefault();

        var emailAddress = document.getElementById("emailInput").value;

        if (!emailAddress || !validateEmail(emailAddress)) {
            alert("Please enter a valid email address.");
            return;
        }

        try {
            const response = await fetch('/send-otp', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    email: emailAddress,

                })
            });

            if (response.ok) {
                alert("OTP has been sent to your email.");
            } else {
                alert("Failed to send OTP. Please try again later.");
            }
        } catch (error) {
            console.error('Error sending OTP:', error);
            alert("Failed to send OTP. Please try again later.");
        }
    }

    function validateEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
</script>


<script>
    const inputField = document.getElementById('activities');
    const errorMessage = document.getElementById('error-message');

    inputField.addEventListener('input', function() {
        if (inputField.value.trim() === '') {
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });
</script>
