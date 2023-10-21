// Loader

window.addEventListener("load", () => {
    const contenedor_loader = document.querySelector(".contenedor_loader");
    contenedor_loader.style.opacity = 0;
    contenedor_loader.style.visibility = "hidden";
})

// menu burger funcionamiento

document.querySelector('.hdr-cont-1-menu-bgr-1').addEventListener('click', btn_burger);

let content_siderbar = document.querySelector('.content-siderbar'),
    nav_cont_area = document.querySelector('.nav-cont-area'),
    nav_cont = document.querySelector('.nav-cont'),
    nav_cont_title = document.querySelector('.nav-cont-title'),
    nav_info_user = document.querySelector('.nav-info-user'),
    nav_list = document.querySelector('.nav-list');

function btn_burger() {
    content_siderbar.classList.toggle("cont-sdr");
    nav_cont_area.classList.toggle("nc-bgr");
    nav_cont.classList.toggle("nc-bgr");
    nav_cont_title.classList.toggle("nct-bgr");
    nav_info_user.classList.toggle("niu-bgr");
    nav_list.classList.toggle("nl-bgr");
}

const navlists = document.querySelectorAll('.nav-list-item');

navlists.forEach(navlist => {
    navlist.addEventListener('click', () => {
        document.querySelector('.active').classList.remove('active');
        navlist.classList.add('active');
    })
})

const head_list_opt = document.querySelectorAll('.head_list_opt');

head_list_opt.forEach(head_list_opt => {
    head_list_opt.addEventListener('click', () => {
        document.querySelector('.optionActive').classList.remove('optionActive');
        head_list_opt.classList.add('optionActive');
    })
})

// Dropdown
document.addEventListener("DOMContentLoaded", function () {
    const userDropdown = document.getElementById("user-dropdown");
    const userDropdownContent = userDropdown.querySelector(".dropdown-content");

    const notificationDropdown = document.getElementById("notification-dropdown");
    const notificationDropdownContent = notificationDropdown.querySelector(".dropdown-content");

    let isUserDropdownOpen = false;
    let isNotificationDropdownOpen = false;

    userDropdown.addEventListener("click", function (event) {
        event.stopPropagation();
        if (!isNotificationDropdownOpen) {
            userDropdownContent.classList.toggle("open");
            isUserDropdownOpen = !isUserDropdownOpen;
        }
    });

    notificationDropdown.addEventListener("click", function (event) {
        event.stopPropagation();
        if (!isUserDropdownOpen) {
            notificationDropdownContent.classList.toggle("open");
            isNotificationDropdownOpen = !isNotificationDropdownOpen;
        }
    });

    // Evita que el menú se cierre cuando se hace clic en su contenido
    userDropdownContent.addEventListener("click", function (event) {
        event.stopPropagation();
    });

    notificationDropdownContent.addEventListener("click", function (event) {
        event.stopPropagation();
    });

    document.addEventListener("click", function (event) {
        if (isUserDropdownOpen) {
            userDropdownContent.classList.remove("open");
            isUserDropdownOpen = false;
        }
        if (isNotificationDropdownOpen) {
            notificationDropdownContent.classList.remove("open");
            isNotificationDropdownOpen = false;
        }
    });

    // Asegúrate de que el código CSS y el HTML sean consistentes con los nuevos IDs.
});

