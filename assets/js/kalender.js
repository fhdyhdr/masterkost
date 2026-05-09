var data1 = new Date();
var theYear = data1.getFullYear();
var theMonth = data1.getMonth() + 1;
var theDay = data1.getDate();
var theWeekDay = data1.getDay();
var monthNormal = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
var monthNunian = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

document.querySelector('.title-month').innerHTML = monthNames[theMonth - 1];

function updateMonthAndYear() {
    document.querySelector('.title-year').innerHTML = theYear;
    document.querySelector('.title-month').innerHTML = monthNames[theMonth - 1];
}

var today = new Date();
var day = today.getDate(); // Tanggal hari ini
var month = today.getMonth() + 1; // Bulan (1-12)
var year = today.getFullYear(); // Tahun
function updateTimeData() {
    var monthName = monthNames[month - 1];
    document.querySelector(".timeData").innerHTML = day + " " + monthName + " " + year;
}

document.querySelector('.timeData').innerHTML = theYear + "-" + theMonth + "-" + theDay;

document.querySelector('.title-year').innerHTML = theYear;
document.querySelector('.title-month').innerHTML = theMonth;

function findFirstDay(year, month) {
    var first = new Date('' + theYear + ',' + theMonth + ',1');
    return (first.getDay());
}

function checkDays(year, month) {
    var rule1 = year % 4;
    var rule2 = year % 100;
    var rule3 = year % 400;

    if (((rule1 == 0) && (rule2 != 0)) && (rule3 == 0)) {
        return (monthNunian[month - 1]);
    } else {
        return (monthNormal[month - 1]);
    }
}

function printDays() {
    var dayInf = '';
    var dayclass;
    var daysTotal = checkDays(theYear, theMonth);
    var firstday = findFirstDay(theYear, theMonth);
    var emptyDay = document.querySelector('.d-list');
    for (var empty1 = 1; empty1 <= firstday; empty1++) {
        dayInf += "<li></li>";
        emptyDay.innerHTML = dayInf;
    }
    for (var days = 1; days <= daysTotal; days++) {
        if ((theYear == data1.getFullYear() && theMonth < data1.getMonth() + 1) || (days < theDay && theYear == data1.getFullYear() && theMonth == data1.getMonth() + 1) || (theYear < data1.getFullYear())) {
            dayClass = 'class="passDay"';
        } else if (days == theDay && theYear == data1.getFullYear() && theMonth == data1.getMonth() + 1) {
            dayClass = 'class="toDay"';
        } else {
            dayClass = 'class="future"';
        }
        dayInf += "<li" + ' ' + dayClass + ">" + "<a>" + days + "</a>" + "</li>";
        emptyDay.innerHTML = dayInf;
    }
    var empty2 = 42 - firstday - daysTotal;
    for (var last = 1; last <= empty2; last++) {
        dayInf += "<li></li>";
        emptyDay.innerHTML = dayInf;
    }
}
printDays();

document.querySelector('.prev').addEventListener('click', function () {
    theMonth = theMonth - 1;
    if (theMonth == 0) {
        theMonth = theMonth + 12;
        theYear = theYear - 1;
    }
    updateMonthAndYear();
    var bbb = checkDays(theYear, theMonth);
    printDays();
    updateTimeData();
});

document.querySelector('.next').addEventListener('click', function () {
    theMonth = theMonth + 1;
    if (theMonth > 12) {
        theMonth = theMonth - 12;
        theYear = theYear + 1;
    }
    updateMonthAndYear();
    printDays();
    updateTimeData();
});

updateMonthAndYear();
updateTimeData();
