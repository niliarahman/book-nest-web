document.getElementById("registerForm").addEventListener("submit", function (e) {
    let valid = true;

    // Clear previous errors
    document.querySelectorAll(".error").forEach(el => el.textContent = "");

    // First Name
    const fname = document.getElementById("fname").value.trim();
    if (fname === "") {
        document.getElementById("fnameError").textContent = "First name must be required.";
        valid = false;
    }

    // Last Name
    const lname = document.getElementById("lname").value.trim();
    if (lname === "") {
        document.getElementById("lnameError").textContent = "Last name must be required.";
        valid = false;
    }

    // Username (lowercase letters + numbers only)
    const username = document.getElementById("username").value.trim();
    const usernameRegex = /^[a-z0-9]+$/;
    if (!usernameRegex.test(username)) {
        document.getElementById("usernameError").textContent = "Username must contain only small letters and numbers.";
        valid = false;
    }

    // Gmail
    const gmail = document.getElementById("gmail").value.trim();
    if (!gmail.includes("@")) {
        document.getElementById("gmailError").textContent = "Gmail must contain '@'.";
        valid = false;
    }

    // Password
    const password = document.getElementById("password").value;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/;
    if (!passwordRegex.test(password)) {
        document.getElementById("passwordError").textContent = "Password must have 1 capital, 1 small, 1 number & 1 special character.";
        valid = false;
    }

    if (!valid) {
        e.preventDefault(); // prevent form submit
    }
});
