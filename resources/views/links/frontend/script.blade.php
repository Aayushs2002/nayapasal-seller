@include('links.commonscript')


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
        const companyInfoSection = document.getElementById("companyinfo");
        const personalInfoSection = document.getElementById("personalinfo");
        const companyDocumentSection = document.getElementById("companydocument");
        
        const previousButton = document.getElementById("previous-button");
        const previousButton2 = document.getElementById("previous-button2");
        const nextButton2 = document.getElementById("next-button2");


        function setError(inputId, message) {
            const inputElement = document.getElementById(inputId);
            const errorElement = document.getElementById(inputId + "-error");

            inputElement.classList.add("error");
            errorElement.textContent = message;
        }

        function clearError(inputId) {
            const inputElement = document.getElementById(inputId);
            const errorElement = document.getElementById(inputId + "-error");

            inputElement.classList.remove("error");
            errorElement.textContent = "";
        }


        function validatePersonalInfo() {
            let isValid = true;

            const firstName = document.getElementById("firstname").value.trim();
            const lastName = document.getElementById("lastname").value.trim();
            const mobileNo = document.getElementById("mobileno").value.trim();
            const email = document.getElementById("emailss").value.trim();
            const password = document.getElementById("passwordss").value.trim();
            if (!firstName) {
                setError("firstname", "First name is required.");
                isValid = false;
            } else {
                clearError("firstname");
            }

            if (!lastName) {
                setError("lastname", "Last name is required.");
                isValid = false;
            } else {
                clearError("lastname");
            }

            if (!mobileNo) {
                setError("mobileno", "Mobile number is required.");
                isValid = false;
            } else {
                clearError("mobileno");
            }

            if (!email) {
                setError("email", "Email is required.");
                isValid = false;
            } else {
                clearError("email");
            }

            if (!password) {
                setError("password", "Password is required.");
                isValid = false;
            } else {
                clearError("password");
            }

            return isValid;
        }


        function validateCompanyInfo() {
            let isValid = true;

            const businessName = document.getElementById("businessname").value.trim();
            const establishDate = document.getElementById("establishdate").value.trim();
            const activities = document.getElementById("activities").value.trim();
            const vatNo = document.getElementById("vatno").value.trim();
            const address1 = document.getElementById("address1").value.trim();

            if (!businessName) {
                setError("businessname", "Business name is required.");
                isValid = false;
            } else {
                clearError("businessname");
            }

            if (!establishDate) {
                setError("establishdate", "Establish date is required.");
                isValid = false;
            } else {
                clearError("establishdate");
            }

            if (!activities) {
                setError("activities", "Activities are required.");
                isValid = false;
            } else {
                clearError("activities");
            }

            if (!address1) {
                setError("address1", "Address is required.");
                isValid = false;
            } else {
                clearError("address1");
            }

            return isValid;
        }


        function validateCompanyDocuments() {
            let isValid = true;

            const registrationDocuments = document.getElementById("registration_documents").value;

            const vatRegistrationDocuments = document.getElementById("vat_registration_documents").value;
            const companyLogo = document.getElementById("company_logo").value;

            if (!registrationDocuments) {
                setError("registration_documents", "Registration document is required.");
                isValid = false;
            } else {
                clearError("registration_documents");
            }

            if (!vatRegistrationDocuments) {
                setError("vat_registration_documents", "VAT registration document is required.");
                isValid = false;
            } else {
                clearError("vat_registration_documents");
            }
            if (!companyLogo) {
                setError("company_logo", "Company logo is required.");
                isValid = false;
            } else {
                clearError("company_logo");
            }

            return isValid;
        }


        nextButton.addEventListener("click", function() {
            if (validatePersonalInfo()) {
                personalInfoSection.classList.add("hidden");
                companyInfoSection.classList.remove("hidden");
            }
        });

        previousButton.addEventListener("click", function() {
            companyInfoSection.classList.add("hidden");
            personalInfoSection.classList.remove("hidden");
        });

        nextButton2.addEventListener("click", function() {
            if (validateCompanyInfo()) {
                companyInfoSection.classList.add("hidden");
                companyDocumentSection.classList.remove("hidden");
            }
        });

        previousButton2.addEventListener("click", function() {
            companyDocumentSection.classList.add("hidden");
            companyInfoSection.classList.remove("hidden");
        });


        document.getElementById('registration-form').addEventListener('submit', function(event) {
            if (!validateCompanyDocuments()) {
                event.preventDefault();
            } else {
                console.log('Form submitted');
            }
        });
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
