function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function weekday(wd) {
    var list = ['Chủ Nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7']
    return list[wd]
}

function startTime() {
    var today = new Date();
    var wd = today.getDay();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();

    // Chuyển đổi sang dạng 01, 02, 03
    wd = weekday(wd);
    dd = checkTime(dd);
    mm = checkTime(mm);
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    // Ghi ra trình duyệt
    $('#timer').text(wd + ", " + dd + "/" + mm + "/" + yyyy + ", " + h + ":" + m + ":" + s)

    // Dùng hàm setTimeout để thiết lập gọi lại 0.5 giây / lần
    var t = setTimeout(function() {
        startTime();
    }, 500);
}
startTime()