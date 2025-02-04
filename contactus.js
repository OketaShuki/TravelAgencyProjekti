function validateForm(event) {
    
    event.preventDefault();

    const emri = document.getElementById("emri").value.trim();
    const email = document.getElementById("email").value.trim();
    const titulli = document.getElementById("titulli").value.trim();
    const mesazhi = document.getElementById("mesazhi").value.trim();

    // Validimi i emrit
    if (emri === "") {
        alert("Ju lutem plotësoni emrin.");
        return false;
    }

    // Validimi i email
    if (email === "") {
        alert("Ju lutem plotësoni email-in.");
        return false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Ju lutem vendosni një email të vlefshëm, që përmban '@' dhe '.'");
        return false;
    }

    // Validimi i titullit
    if (titulli === "") {
        alert("Ju lutem plotësoni titullin.");
        return false;
    }

    // Validimi i mesazhit
    if (mesazhi === "") {
        alert("Ju lutem shkruani mesazhin tuaj.");
        return false;
    }

    
    alert("Mesazhi është dërguar me sukses. Për pak kohë, njëri nga agjentët tanë do t'ju kthejë përgjigje.");

    
    document.getElementById("myForm").submit();

    return true; 
}
