import "./bootstrap";
import "flowbite";

// Membuat border merah ketika input sudah di isi
document.addEventListener("DOMContentLoaded", function () {
    const inputFields = document.querySelectorAll("input, textarea");
    const selectElements = document.querySelectorAll("select");

    inputFields.forEach(function (field) {
        field.addEventListener("focus", function () {
            this.classList.add("border-[#D10B05]");
        });

        field.addEventListener("blur", function () {
            if (this.value === "") {
                this.classList.remove("border-[#D10B05]");
            }
        });
    });

    selectElements.forEach(function (select) {
        select.addEventListener("change", function () {
            if (this.value !== "") {
                this.classList.add("border-[#D10B05]");
            } else {
                this.classList.remove("border-[#D10B05]");
            }
        });
    });
});
