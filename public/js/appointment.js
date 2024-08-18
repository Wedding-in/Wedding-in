const currentDate = document.querySelector(".current-date"),
daysTag = document.querySelector(".days"),
prevNextIcon = document.querySelectorAll(".icons span"),
chosen1 = document.querySelector(".chosen1"),
chosen2 = document.querySelector(".chosen2");


let date = new Date(),
    currYear = date.getFullYear(),
    currMonth = date.getMonth(),
    selectedDate = null,
    selectedMonth = null,
    selectedYear = null;

const months = ["January", "February", "March", "April", "May", "June", "July",
                "August", "September", "October", "November", "December"];

const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

const renderCalendar = () => {
    let firstDayOfMonth = new Date(currYear, currMonth, 1).getDay(),
        lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
        lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
        lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();
    let liTag = "";

    for (let i = firstDayOfMonth; i > 0; i--) {
        liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
    }

    for (let i = 1; i <= lastDateofMonth; i++) {
        // let isToday = i === date.getDate() && currMonth === new Date().getMonth()
        //                     && currYear === new Date().getFullYear() ? "active" : "";
        let isSelected = i === (selectedDate && currMonth === selectedMonth && currYear === selectedYear) ? "active" : "";
        liTag += `<li class="${isSelected}">${i}</li>`;
    }

    for (let i = lastDayofMonth; i < 6; i++) {
        liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
    }

    currentDate.innerHTML = `${months[currMonth]} ${currYear}`;
    daysTag.innerHTML = liTag;

    addDateClickListeners();
}

const addDateClickListeners = () => {
    const days = daysTag.querySelectorAll("li:not(.inactive)"); // Pilih hanya tanggal yang aktif

    days.forEach(day => {
        day.addEventListener("click", () => {
            // Hapus kelas "active" dari elemen yang sebelumnya aktif
            daysTag.querySelector(".active")?.classList.remove("active");
            // Tambahkan kelas "active" ke elemen yang baru diklik
            day.classList.add("active");
            // Simpan tanggal yang dipilih
            selectedDate = parseInt(day.innerText);
            selectedMonth = currMonth;
            selectedYear = currYear;

            const selectedDayOfWeek = new Date(currYear, currMonth, selectedDate).getDay();
            chosen1.innerHTML = `${months[selectedMonth]}`;
            chosen2.innerHTML = `${daysOfWeek[selectedDayOfWeek]}, ${selectedDate}`;
        });
    });
}

renderCalendar()

prevNextIcon.forEach(icon => {
    icon.addEventListener("click", () => {
        currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

        if (currMonth < 0 || currMonth > 11) {
            date = new Date(currYear, currMonth);
            currYear = date.getFullYear();
            currMonth = date.getMonth();
        }else {
            date = new Date();
        }
        renderCalendar();
    });
});


