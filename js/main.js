const regist = document.querySelector (".reg");
const login = document.querySelector (".login");

const show = function(s) {
    if (s == "reg") {
        regist.style.display = "block";
        login.style.display = "none";
    } else if (s == "login") {
        login.style.display = "block";
        regist.style.display = "none";
    }
};

const del = function(del_b) {
    if (del_b = true) {
        window.location.href = 'api/del_user.php';
    }
}