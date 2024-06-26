function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const svgElements = document.querySelectorAll(".hs-password-active");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        svgElements.forEach((element) => {
            element.classList.add("hidden");
        });
        document
            .querySelectorAll(".hs-password-active.block")
            .forEach((element) => {
                element.classList.remove("hidden");
            });
    } else {
        passwordInput.type = "password";
        svgElements.forEach((element) => {
            element.classList.add("hidden");
        });
        document
            .querySelectorAll(".hs-password-active.hidden")
            .forEach((element) => {
                element.classList.remove("hidden");
            });
    }
}
