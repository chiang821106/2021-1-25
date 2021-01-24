$(document).ready(function () {

    
    var employeeList = [
        // {
        //     boardname: "IamBoss",
        //     boardsex: "男",
        //     boardsubject: "可樂",
        //     boardcontent: "123",
        //     boardtime: Date(),
        //     checked: "1",
        //     boardid: "111",
        // } 
    ];

    //  生成列表
    function createTable() {

        

        // 先清除列表
        $('#employeeTable').empty();
        $.each(employeeList, function (key, data) {
            // 編號
            number = key + 1;

            // 各欄位產生
            var td = "",
                tr = "";
            // 序號

            td += '<td>' + number + '</td>';

            // 姓名

            td += '<td class="td1">' + employeeList[key].boardname + '</td>';

            // 性別

            td += '<td class="td2">' + employeeList[key].boardsex + '</td>';

            // 主題

            td += '<td class="td2">' + employeeList[key].boardsubject + '</td>';

            // 內容

            td += '<td class="td2">' + employeeList[key].boardcontent + '</td>';
            // 時間

            td += '<td class="td2">' + employeeList[key].boardtime + '</td>';

            // 已讀狀態

            td += '<td class="td2">' + employeeList[key].checked + '</td>';

            // ID
            td += '<input type="hidden" class="inputVal" value="' + employeeList[key].boardid + '">';

            tr += '<tr class="text-center">' + td + '</tr>';
            td = "";

            // 抓表單顯示
            $('#employeeTable').append(tr);

            // 顯示共有幾筆資料
            $('#totalData').text(number);
        })
    };

    //先呼叫一次更新畫面
    createTable();

    //向後端抓資料顯示頁面------------------------待php
    // //取得最新資料且更新
    function downloadAndUpateTable() {
        // $.get('test.php', function (dataFromServer) {
        //     // employeeList = JSON.parse(dataFromServer); //將取得的字串改為陣列
        //     // createTable();
        //     var array = Object.keys(dataFromServer).map(function (_) {
        //         return dataFromServer[_];
        //     });
        //     employeeList = array; //將取得的字串改為陣列
        //     console.log(employeeList);
        //     createTable();
        // });

        jQuery.ajax({
            url: 'test.php',
            method: 'get',
            data: "json",
            success: function (dataFromServer) {
                var array = Object.keys(dataFromServer).map(function (_) {
                    return dataFromServer[_];
                });
                employeeList = array; //將取得的字串改為陣列
                console.log(employeeList);
                createTable();               
            }
        });
    }
    // 先呼叫一次
    downloadAndUpateTable(); 
})

