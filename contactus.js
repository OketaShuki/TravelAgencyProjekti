function validateForm(event) {
    // Prevent form submission to test the validation
    event.preventDefault();

    const emri = document.getElementById("emri").value.trim();
    const email = document.getElementById("email").value.trim();
    const titulli = document.getElementById("titulli").value.trim();
    const mesazhi = document.getElementById("mesazhi").value.trim();

    // Validating the name field
    if (emri === "") {
        alert("Ju lutem plotësoni emrin.");
        return false;
    }

    // Validating the email field
    if (email === "") {
        alert("Ju lutem plotësoni email-in.");
        return false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Ju lutem vendosni një email të vlefshëm, që përmban '@' dhe '.'");
        return false;
    }

    // Validating the title field
    if (titulli === "") {
        alert("Ju lutem plotësoni titullin.");
        return false;
    }

    // Validating the message field
    if (mesazhi === "") {
        alert("Ju lutem shkruani mesazhin tuaj.");
        return false;
    }

    // If everything is correct, show the success message
    alert("Mesazhi është dërguar me sukses. Për pak kohë, njëri nga agjentët tanë do t'ju kthejë përgjigje.");

    // After showing success message, submit the form
    document.getElementById("myForm").submit();

    return true; // Form will be submitted after success
}
