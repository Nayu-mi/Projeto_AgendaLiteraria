document.getElementById("cadastroForm").addEventListener("submit", function(event){
    //event.preventDefault(); // Remova esta linha

    var nomeCompleto = document.getElementById("nomeCompleto").value;
    var dataNascimento = document.getElementById("dataNascimento").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmarSenha").value;

    // Validação do cadastro
    if (senha !== confirmarSenha) {
        event.preventDefault();
        swal("Erro", "As senhas não coincidem!", "error");
    }
    // Continue com outras validações conforme necessário
});

// Olho para visibilidade de senha
function togglePasswordVisibility(){
    var passwordInput = document.getElementById("senha");
    var passwordToggle = document.querySelector(".fa-eye");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.classList.remove("fa-eye");
        passwordToggle.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordToggle.classList.remove("fa-eye-slash");
        passwordToggle.classList.add("fa-eye");
    }
}
document.querySelector(".fa-eye").addEventListener("click", togglePasswordVisibility);
