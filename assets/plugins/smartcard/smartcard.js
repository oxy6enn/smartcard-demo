
var audio = new Audio('./sound/ti.mp3');

var myVar = null;

function start_read() {
    myStopFunction();
    myVar = setInterval(load_data, 1500);
}

function myStopFunction() {
    clearInterval(myVar);
}

function load_data() {
   myStopFunction();
    var jdata = null;
    $.ajax({
        url: 'https://localhost:8182/thaiid/read.jsonp?callback=callback&section1=true&section2a=true&section2c=true',
        method: 'GET',
        type: 'JSON',
        success: function (jsondata) {
            var data = jsondata.substr(13, jsondata.length - 14);
            jdata = JSON.parse(data);
            if (jdata !== null) {
                audio.play();
                setTimeout(function(){
                    check_data_card(jdata.CitizenNo, jdata);
                },500);
                
            }else{
                $.busyLoadFull("hide");
                start_read();
            }
        }, error: function (jqXHR, textStatus, errorThrown) {
            $.busyLoadFull("hide");
            Swal.fire({
                type: 'warning',
                title: 'ลองใหม่อีกครั้ง',
                text: 'กรุณาทำการอ่านบัตรใหม่อีกครั้ง!' + textStatus
            }).then((res) => {
                start_read();
            });
        }
    })
}


function check_data_card(id_card, jdata) {

  
    var CitizenNo = $("#CitizenNo").val();
	if (id_card !== "") {
        $.ajax({
            method: "POST",
            data: {
                card_id: id_card
            },
            success: function (data) {
                $("#res").html(data.substr(2, data.length));
                
            $("#CitizenNo").text(jdata.CitizenNo);
			$("#TitleNameTh").text(jdata.TitleNameTh);
			// $("#TitleNameEn").text(jdata.TitleNameEn);
            $("#FirstNameTh").text(jdata.FirstNameTh);
            $("#LastNameTh").text(jdata.LastNameTh);
            // $("#FirstNameEn").text(jdata.FirstNameEn);
            // $("#LastNameEn").text(jdata.LastNameEn);
			$("#BirthDate").text(jdata.BirthDate);
			$("#Gender").text(jdata.Gender);
            $("#GenderText").text(jdata.Gender);
			// $("#Road").text(jdata.Road);
			$("#HomeNo").text(jdata.HomeNo);
			$("#Moo").text(jdata.Moo);
			$("#Soi").text(jdata.Soi);
			$("#Road").text(jdata.Road);
			$("#Tumbol").text(jdata.Tumbol);
			$("#Amphur").text(jdata.Amphur);
			$("#Province").text(jdata.Province);
	
            if(jdata.Gender == 1){
            $("#GenderText").text("ชาย");
            }else{
            $("#GenderText").text("หญิง");
            }

            	var image = new Image();
            image.className = "fix_image";
            image.src = "data:image/png;base64," + jdata.Photo;
            $('#photo').html(image);
                check_card1(jdata);

        
            }

        }).then((res) => {
            handleValueChange();
        });


    } else {
        $.busyLoadFull("hide");
        Swal.fire({
            type: 'error',
            title: 'INFO',
        }).then((res) => {
                start_read();
            });
    }

    

}

function handleValueChange() {         
    var txtCitizenNo = document.getElementById('CitizenNo');
    document.getElementById('CitizenNoValue').value=txtCitizenNo.innerHTML;

    var txtTitleNameTh = document.getElementById('TitleNameTh');
    document.getElementById('TitleNameThValue').value=txtTitleNameTh.innerHTML;

    var txtFirstNameTh = document.getElementById('FirstNameTh');
    document.getElementById('FirstNameThValue').value=txtFirstNameTh.innerHTML;

    var txtLastNameTh = document.getElementById('LastNameTh');
    document.getElementById('LastNameThValue').value=txtLastNameTh.innerHTML;

    var txtBirthDate = document.getElementById('BirthDate');
    document.getElementById('BirthDateValue').value=txtBirthDate.innerHTML;

    var txtGender = document.getElementById('Gender');
    document.getElementById('GenderValue').value=txtGender.innerHTML;

    var txtGenderText = document.getElementById('GenderText');
    document.getElementById('GenderTextValue').value=txtGenderText.innerHTML;

    var txtHomeNo = document.getElementById('HomeNo');
    document.getElementById('HomeNoValue').value=txtHomeNo.innerHTML;

    var txtMoo = document.getElementById('Moo');
    document.getElementById('MooValue').value=txtMoo.innerHTML;

    var txtSoi = document.getElementById('Soi');
    document.getElementById('SoiValue').value=txtSoi.innerHTML;

    var txtRoad = document.getElementById('Road');
    document.getElementById('RoadValue').value=txtRoad.innerHTML;

    var txtTumbol = document.getElementById('Tumbol');
    document.getElementById('TumbolValue').value=txtTumbol.innerHTML;

    var txtAmphur = document.getElementById('Amphur');
    document.getElementById('AmphurValue').value=txtAmphur.innerHTML;

    var txtProvince = document.getElementById('Province');
    document.getElementById('ProvinceValue').value=txtProvince.innerHTML;
}
